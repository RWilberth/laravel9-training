@extends('layouts.app')

@section('title', 'Project manager')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      Search
                    </div>
                    <div class="card-body">
                        @include('projects.search-form')
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-1">
                <div class="float-end">
                    <a class="btn btn-outline-primary" id="btnNew" href="{{url('/projects/create')}}"><span class="fas fa-plus"></span> New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('projects.table', ['projects' => $projectsDataPaginated->data ])
            </div>
            <div class="col-12">
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item @if($currentPage == 1) disabled @endif">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true" onclick="return changePage({{$currentPage-1}})">Previous</a>
                      </li>
                      @for ($pageDisplay = 1; $pageDisplay <= $lastPage; $pageDisplay++)
                        <li class="page-item @if($pageDisplay == $currentPage) active @endif">
                            <a class="page-link" href="#" onclick="return changePage({{$pageDisplay}})">{{$pageDisplay}}</a>
                        </li>
                      @endfor
                      <li class="page-item @if($currentPage == $lastPage) disabled @endif" onclick="return changePage({{$currentPage+1}})">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/projects/IndexController.js') }}"></script>
    <script type="text/javascript">
        function changePage(page) {
            var url = new URL(window.location.href);
            url.searchParams.set('page', page);
            window.location.replace(url.toString());
            return false;
        }

        $(document).ready(function () {
            const controller = new IndexController({
                currentPage: {{$currentPage}}
            });
            controller.init();
        });
    </script>
@endsection
