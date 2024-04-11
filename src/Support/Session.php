<?php

namespace Sienekib\Mehael\Support;

use Sienekib\Mehael\Database\Factory\DB;

class Session
{
    public static function start()
    {

        ini_set('session.gc_lifetime', 0);
        ini_set('session.cookie_lifetime', 0);
        ini_set('session.cookie_httponly', '1');
        session_start();

        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
            // 1800 segundos (30 minutos) de inatividade, a sessão expirou
            session_unset();     // limpa as variáveis de sessão
            session_destroy();   // destrói a sessão
        }

        $_SESSION['LAST_ACTIVITY'] = time(); // atualiza o último momento de atividade

        // Restante do seu código aqui

        /*if (session_status() == PHP_SESSION_NONE) {
             
            
            session_cache_limiter(false);
            session_start();
        }*/

        // 7200 -> 120 min || 1800 -> 30 minutos
    }

    public static function check_if_user_active()
    {
        $activity = -1;
        $sess_managements = DB::table('session_managements')->get();
        if (!empty($sess_managements)) {
            $current_user_id = Auth::user()->id ?? -1;
            $uactivity = DB::table('session_managements')->select('is_active')->where('user_id', '=', $current_user_id)->get();
            $activity = $uactivity->is_active ?? -1;
            if ($activity != '1' || $activity != 1) {
                //return redirect()->route('entrar');
            }
        }
        //return redirect()->route('entrar');
    }

    public static function has(string $key)
    {
        return isset($_SESSION[$key]);
    }

    public static function setFlashMessage(string $key, string $message)
    {
        $_SESSION['__flash'][$key] = $message;
    }

    public static function hasFlash(string $key)
    {
        return isset($_SESSION['__flash'][$key]);
    }

    public static function getFlashMessage(string $key)
    {
        $flash_value = null;

        if (self::hasFlash($key)) {
            $flash_value = $_SESSION['__flash'][$key];
            self::removeFlash($key);
        }

        return $flash_value;
    }

    public static function remove(string $key)
    {
        unset($_SESSION[$key]);
    }

    public static function removeFlash(string $key)
    {
        unset($_SESSION['__flash'][$key]);
    }

    public static function auth()
    {
        return static::has('user');
    }

    public static function set(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;

        return new static;
    }

    public static function regenerateId()
    {
        session_regenerate_id();
    }

    public static function get(string $key)
    {
        return static::has($key) ? $_SESSION[$key] : null;
    }

    public static function destroy()
    {
        foreach ($_SESSION as $key => $value) {
            if (self::has($key)) {
                self::remove($key);
            }
        }
    }

    public static function destroyFlash()
    {
        if (self::has('__flash')) {
            foreach ($_SESSION['__flash'] as $key => $value) {
                if (self::has($key)) {
                    self::remove($key);
                }
            }
        }
    }
}
