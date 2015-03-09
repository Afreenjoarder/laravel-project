
@extends('layouts.task')

@section('content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE BREADCRUMB -->
            @include('taskstodo.partials.breadcrumb')
            <!-- End PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN TODO SIDEBAR -->
                    <div class="todo-sidebar">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <h2>Catagories</h2>
                                @if (Session::has('message'))
                                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                                @endif


                                @foreach($catagories as $key => $value)



                                    <li><h5><a  href="{{ URL::to('catagories/' . $value->id) }}">{{ $value->cTitle }}</a></h5></li>

                                @endforeach
                                <br>


                                <!--crud-->
                                <p>
                                    {!! link_to_route('catagories.index', 'Back to catagories') !!} |

                                </p>

                            </div>
                        </div>
                    </div>



                            <!-- END TODO SIDEBAR -->


                    <!-- BEGIN TODO CONTENT -->
                    <div class="todo-content">
                        <div class="portlet light">
                            <!-- PROJECT HEAD -->
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-green-sharp hide"></i>
                                    <h2>{{ $catagory->cTitle }}</h2>
                                </div>
                                <div class="actions">
                                </div>
                            </div>


                            <!-- end PROJECT HEAD -->
                            <div class="portlet-body">
                                <div class="row">


                                    <div class="todo-tasklist-devider">
                                    </div>
                                    <div class="col-md-5">
                                      {{--  @if ( !$catagory->tasks->count() )<!--this line-->
                                        You have no tasks.
                                        @else
--}}
                                                {{--<li>--}}

                                                <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
                                                    <div class="todo-tasklist">
                                                        @foreach( $catagory->tasks as $task )
                                                        <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                                            {{--
                                                                                                                 <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar4.jpg" width="27px" height="27px">
                                                            --}}
                                                            <div class="todo-tasklist-item-title">
                                                                <a href="{{ route('catagories.tasks.show', [$catagory->id, $task->catagory_id]) }}">{{ $task->title }}</a><br>
                                                            </div>
                                                            <div class="todo-tasklist-item-text">
                                                                {{$task->description}}
                                                            </div>
                                                            <div class="todo-tasklist-controls pull-left">
                                                                <span class="todo-tasklist-date"><i class="fa fa-calendar"></i>{{$task->start_date}} </span>
                                                                <span class="todo-tasklist-date"><i class="fa fa-calendar"> </i>{{$task->end_date}} </span>


                                                                <span class="todo-tasklist-badge badge badge-roundless">{{$task->status}}</span>
                                                            </div>
                                                        </div>
                                                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.tasks.destroy', $catagory->id, $task->id))) !!}
                                                        {!! link_to_route('catagories.tasks.edit', 'Edit', array($catagory->id, $task->id), array('class' => 'btn btn-info')) !!}

                                                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                        {!! Form::close() !!}

                                                        @endforeach
{{--
                                                        @endif
--}}

                                                    </div>

                                                </div>
                                    </div>

                                    <div class="todo-tasklist-devider">
                                    </div>
                                    <div class="col-md-7 ">
                                        <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">

                                            <h2>Create Task for Catagory "{{ $catagory->cTitle }}"</h2>

                                            {!! Form::model(new App\Task, ['route' => ['catagories.tasks.store', $catagory->id], 'class'=>'']) !!}
                                            @include('tasks/partials/_form1', ['submit_text' => 'Create Task'])
                                            {!! Form::close() !!}


                                        </div>
                                    </div>

                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TODO CONTENT -->
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->


@endsection
