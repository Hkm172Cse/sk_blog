<html>
    <body>
    <form action="{{url('check')}}" class="row mt-2" method="post" enctype="multipart/form-data">
        @csrf
            <input type="file" name="img_one"/>
            <input type="file" name="img_two"/>
            <button type="submit">submit</button>

        </form>
    </body>
</html>