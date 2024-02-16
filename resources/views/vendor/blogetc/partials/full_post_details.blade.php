@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
@can(\WebDevEtc\BlogEtc\Gates\GateTypes::MANAGE_BLOG_ADMIN)
    <a href="{{$post->editUrl()}}" class="btn btn-outline-secondary btn-sm pull-right float-right" style="position:relative;z-index:999">
        Edit Post
    </a>
@endcan
<em class="date">{{date("M j, Y", strtotime($post->posted_at))}}</em>
<div class="image-holder">
    {!! $post->imageTag('medium', false, 'd-block mx-auto') !!}
</div>					
<div class="text-holder">
    {!! $post->renderBody() !!}
</div>

