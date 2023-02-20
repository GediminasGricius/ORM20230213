<?php

namespace models;

class NewCategory extends Category
{
    public function getName(): ?string
    {
        return parent::getName() . '[NEW]';
    }


}