@if ($crud->hasAccess('delete'))
	<a href="{{ url($crud->route.'/notify'.$entry->getKey()) }}" class="btn btn-xs btn-default" data-button-type="notify"></a>
		<i class="fa fa-bullhorn"></i> Notify
@endif