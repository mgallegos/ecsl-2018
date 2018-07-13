<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Ver mis contactos</h4>
  <div class="card-body">
    <div class="row">
      @foreach ($contacts as $index => $contact)
      <div class="col-lg-4 col-sm-6" style="text-align: center;">
        <img class="rounded-circle" src="{{ $contact['gravatar_url'] }}">
        <p class="font-weight-normal font-italic mb-0" style="font-size: 0.9rem;">{{ $contact['firstname'] . ' ' . $contact['lastname'] }}</p>
        <a class="font-weight-normal font-italic mb-0" href="mailto:info@delfos-cloud.com" style="font-size: 0.9rem;">{{ $contact['email'] }}</a>
        <p class="font-weight-normal font-italic" style="font-size: 0.8rem;">{{ $contact['institution'] . ' / ' . $contact['country'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
