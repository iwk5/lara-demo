
    @foreach ($users as $user)
        <div>
             <span>
            {!! $user->name !!}
        </span>
            |
            <span class="col-sm-4">
            {!! $user->created_at->diffForHumans() !!}
        </span>
        </div><br>

    @endforeach
    {{ $users->links() }}