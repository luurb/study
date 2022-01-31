<?php

namespace enterprise\appController;

class ForwardViewComponent implements ViewComponent
{
    public function __construct(private ?string $path)
    {
        
    }

    public function render(Request $request): void
    {
        $request->forward($this->path);
    }
}