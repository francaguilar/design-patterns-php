<?php

namespace Codenip\Factories\Abstract\Interface;

interface ProductFactory
{

    public function createProduct(): Product;

    public function createSparePartProduct(): SparePartProduct;
}