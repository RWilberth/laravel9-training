

<table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">Description</th>
        <th scope="col">Planned start</th>
        <th scope="col">Planned end</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project)
      <tr>
        <td>{{$project->code}}</th>
        <td>{{$project->description}}</td>
        <td>{{date("d/m/Y", strtotime($project->planned_start))}}</td>
        <td>{{date("d/m/Y", strtotime($project->planned_end))}}</td>
        <td>{{date("d/m/Y H:i", strtotime($project->created_at))}}</td>
        <td>{{date("d/m/Y H:i", strtotime($project->updated_at))}}</td>
        <td>
            <a class="btn btn-outline-primary" href="{{url('/projects/'.$project->id.'/edit')}}">Actualizar</a>
            <button class="btn btn-outline-primary btn-delete-project">Delete</button>
            <form method="post" action="{{url('/projects/'.$project->id)}}">
                @method("DELETE")
                @csrf
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
