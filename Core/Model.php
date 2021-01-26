<?php

namespace mvc\Core;

class Model
{
    public function getProperties()
    {
        // Trả về mảng liên hợp chứa các thuộc tính của đối tượng đã cho. 
        // Nếu một thuộc tính không được gán giá trị, nó sẽ được trả về với giá trị NULL.

        return get_object_vars($this); 
    }
}
