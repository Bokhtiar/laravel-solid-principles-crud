<div class="container">

    @if (@$edit)
        <form action="@route('post.update', $edit->post_id)" method="POST" enctype="multipart/form-data">
            @method('PUT')    
    @else
        <form action="@route('post.store')" method="POST" enctype="multipart/form-data">
    @endif
        @csrf
        
        @component('components.input', [
            'label' => 'Title.',
            'type' => 'text',
            'name' => 'title',
            'placeholder' => 'bangladsh news.',
            'required' => true,
            'value' => @$edit->title,
        ])
        @endcomponent

        @component('components.input', [
            'label' => 'Short description.',
            'type' => 'text',
            'name' => 'short_des',
            'placeholder' => 'bangladesh is wonderfull country.',
            'required' => true,
            'value' => @$edit->short_des,
        ])
        @endcomponent

        @component('components.input', [
            'label' => 'Image.',
            'type' => 'file',
            'name' => 'image',
        ])
        @endcomponent

        @component('components.text-area', [
            'label' => 'Description.',
            'name' => 'des',
            'placeholder' => 'bangladesh is wonderfull country.',
            'required' => true,
            'value' => @$edit->des,
        ])
        @endcomponent

        @component('components.primary_button')
        @endcomponent
    </form>
</div>
