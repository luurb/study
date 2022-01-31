<?php

namespace enterprise\appController;

interface ViewComponent
{
    public function render(Request $request): void;
}