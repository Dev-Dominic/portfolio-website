<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{
    public string $title;
    public string | null $desc;
    public string | null $image;
    public string $type;
    public array  $techStack;
    public string | null $link;

    /**
     * Create a new component instance.
     * @param array<int,mixed> $project
     */
    public function __construct(
        public $project,
    ) {
        $this->title = $project['title'];
        $this->desc = $project['description'];
        $this->image = $project['image'];
        $this->type = $project['type'];
        $this->techStack = strlen($project['techStack']) == 0 ? [] : explode(',', $project['techStack']);
        $this->link = $project['link'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-card');
    }
}
