<span class="float-right">
    <form action="{{route('listings.destroy',$id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-outline-danger">Go Delete</button>
    </form>
</span>
