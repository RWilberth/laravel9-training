@extends('layouts.app')

@section('title', 'Create project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('projects.form', ['action' => 'projects/create'])
            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="saveFormModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar nevo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <iframe id="modalBodyFrame" width="100%" height="100%"></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/projects/CreateController.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            const controller = new CreateController();
            controller.init();
        });
    </script>
@endsection
