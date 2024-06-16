<div class="project_section">
    <div class="project_section_header">
        <h2>{{ $sectionTitle }}</h2>
        <x-iconpark-up class="closeIcon"/>
        <x-iconpark-down class="openIcon"/>
    </div>

    <div class="project_list">
        @foreach ($projects as $project)
        <x-project-card :project="$project" />
        @endforeach
    </div>
</div>
