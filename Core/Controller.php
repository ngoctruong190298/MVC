<?php
    namespace mvc\Core;

    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename)
        {
            extract($this->vars);
            ob_start(); 
            //trước khi đưa lên server sẽ lưu vào 1 buffer tạm(vùng nhớ tạm) 
            //để tiến hành 1 thao tác nào đó nữa rồi mới submit lên server
            
            $get_url = ucfirst(str_replace('Controller', '', get_class($this)));
            require(ROOT . "Views/" . ucfirst(str_replace('Mvc\s\\', '', $get_url)) . '/' . $filename . '.php');
            $content_for_layout = ob_get_clean();
            //Đơn giản là lấy dữ liệu trong buffer tạm và xử lý
            //Lấy xong rồi xóa luôn dữ liệu đó

            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }

?>