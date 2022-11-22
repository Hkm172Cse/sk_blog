<html>
    <body>
    <form action="{{url('check_up')}}" class="row mt-2" method="post" enctype="multipart/form-data">
        @csrf
        @foreach($data as $val)
            <input value="{{$val->id}}" name="edit_id"/>
            <input type="file" name="img_one"/>
            <input type="file" name="img_two"/>
            <button type="submit">submit</button>

         @endforeach
        </form>
    </body>
</html>