<form method="POST" action="{{url('/projects')}}" class="row">
    @csrf
    <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
        <input type="text" id="description" class="form-control" name="description" value="{{ data_get($formInputs, 'description', '') }}"  />
    </div>
    <div class="col-md-6">
        <label for="code" class="form-label">Code</label>
        <input type="text" id="code" class="form-control" name="code" value="{{ data_get($formInputs, 'code', '') }}" />
    </div>
    <div class="col-12 my-1">
        <div class="float-end">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>
