<?php

namespace Sienekib\Mehael\Template;

class View
{
    public static function render(string $view, array $params)
    {
        if (!str_contains($view, ':')) {
            echo "View `$view` mal formada";
            exit;
        }
        $path = view_path() . '/';
        $parts = explode(':', $view);

        if (empty($parts[0])) {
            echo "Precisa definir um título para sua tela";
            exit;
        }

        if (str_contains($parts[1], '.')) {
            $views = explode('.', $parts[1]);
            foreach ($views as $view) {
                if (is_dir($path . $view)) {
                    $path = $path . $view . '/';
                }
            }
            $view = $path . end($views) . '.view.php';
        } else {
            $view = $path . $parts[1] . '.view.php';
        }

        if (!file_exists($view)) {
            try {

                response()->setStatusCode(404);
                throw new \Exception("Tela não encontrado");
            } catch (\Exception $th) {
                echo $th->getMessage();
            }
        }


        ob_start();

        extract($params);

        require $view;
        $final = ob_get_contents();

        ob_end_clean();

        echo $final;

        return;
    }

    private static function statements($archive, string $type, string $pattern, string $find = '', string $replace = '')
    {
        if (!empty($find))
            $archive =  preg_replace($find, $replace, $archive);

        $result = '';
        switch ($type) {
            case 'if':
                $result = preg_replace_callback($pattern, function ($matches) {
                    return "<?php if ({$matches[1]}): ?>";
                }, $archive);
                break;
            case 'parts':
                $result = preg_replace_callback($pattern, function ($matches) {
                    return "<?php parts({$matches[1]}) ?>";
                }, $archive);
                break;
            case 'echo':
                $result = preg_replace_callback($pattern, function ($matches) {
                    return "<?php echo {$matches[1]} ?>";
                }, $archive);
                break;
        }
        return $result;
    }
}
