<div class="col-lg-3 col-sm-6">
  <div>
    <a href="#" onclick="showBlogPost($('#presentation-{{ $presentation['id'] }}'))">
      <img class="rounded-circle" src="{{ $presentation['gravatar_url'] }}">
    </a>
  </div>
  <p class="badge badge-warning my-2">{{$presentation['space_label']}}</p>
  <h6 class="font-weight-bold mb-0" style="text-transform: uppercase;"><a id='presentation-{{ $presentation['id'] }}' href="#" onclick="showBlogPost(this)" data-insight="{{ $presentation['id'] }}" data-title="{{ $presentation['name'] }}" data-name="{{ $presentation['firstname'] . ' ' . $presentation['lastname'] }}" data-avatar="{{ $presentation['gravatar_url'] }}" data-topic="{{ $presentation['subtopic_label'] }}" data-date="{{ $presentation['schedule_formatted'] }}" data-space="{{ $presentation['space_label'] }}" data-content="{{ $presentation['description'] }}">{{ $presentation['type'] }} "{{ $presentation['name'] }}"</a></h6>
  <p class="font-weight-normal font-italic mb-0" style="font-size: 0.9rem;">{{ $presentation['firstname'] . ' ' . $presentation['lastname'] }}</p>
  <p class="font-weight-normal font-italic" style="font-size: 0.8rem;">{{ $usersData[$presentation['user_id']]['institution'] . ' / ' . $usersData[$presentation['user_id']]['country'] }}</p>
</div>
