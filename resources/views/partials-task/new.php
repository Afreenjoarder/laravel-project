<button class="btn btn-circle green-haze btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
    Actions <i class="fa fa-angle-down"></i>
</button>
<ul class="dropdown-menu pull-right" role="menu">
    <li>
        <a href="{{ URL::to('posts/'.$value->id) }}">Show Post </a>
    </li>
    <li>
        <a href="{{ URL::to('posts/'.$value->id.'/edit/') }}">Edit Post </a>
    </li>

    <li class="divider">
    </li>

    <li>
        {!! Form::open(array('method'=> 'DELETE', 'route' => array('posts.destroy', $value->id))) !!}
        {!! Form::submit('Delete', array('class'=> 'btn btn-square alert alert-danger')) !!}
        {!! Form::close() !!}
    </li>

</ul>

<div class="actions">
    <div class="btn-group">
        <a class="btn green-haze btn-circle btn-sm todo-projects-config" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="icon-settings"></i> &nbsp; <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu pull-right">

            <li>
                <a href="{{ URL::to('catagories/'.$value->id) }}">Show catagory </a>


            </li>
            <li>
                <a href="{{ URL::to('catagories/'.$value->id.'/edit/') }}">Edit catagory </a>

            </li>

            <li class="divider">
            </li>
            <li>
                {!! Form::open(array('method'=> 'DELETE', 'route' => array('catagories.destroy', $value->id))) !!}
                {!! Form::submit('Delete', array('class'=> 'btn btn-square alert alert-danger')) !!}
                {!! Form::close() !!}
            </li>
        </ul>
    </div>
</div>
<!------FORm-->
<div class="container">        <!---form-->
    <div class="col-md-7 col-sm-7">
        <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
            <form action="javascript:;" class="form-horizontal">
                <!-- TASK HEAD -->
                <div class="form">
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8">
                            <div class="todo-taskbody-user">
                                <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar6.jpg" width="50px" height="50px">
                                <span class="todo-username pull-left">Vanessa Bond</span>
                                <button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp;edit&nbsp;</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="todo-taskbody-date pull-right">
                                <button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp; Complete &nbsp;</button>
                            </div>
                        </div>
                    </div>
                    <!-- END TASK HEAD -->
                    <!-- TASK TITLE -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title...">
                        </div>
                    </div>
                    <!-- TASK DESC -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..."></textarea>
                        </div>
                    </div>
                    <!-- END TASK DESC -->
                    <!-- TASK DUE DATE -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-icon">
                                <i class="fa fa-calendar"></i>
                                <input type="text" class="form-control todo-taskbody-due" placeholder="Due Date...">
                            </div>
                        </div>
                    </div>
                    <!-- TASK TAGS -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control todo-taskbody-tags" placeholder="Tags..." value="Pending, Requested">
                        </div>
                    </div>
                    <!-- TASK TAGS -->
                    <div class="form-actions right todo-form-actions">
                        <button class="btn btn-circle btn-sm green-haze">Save Changes</button>
                        <button class="btn btn-circle btn-sm btn-default">Cancel</button>
                    </div>
                </div>
                <div>
                </div>
            </form>
        </div>

    </div>
</div>
