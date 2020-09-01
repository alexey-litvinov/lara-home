<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Новости</span></a>
</li>

<li class="{{ Request::is('votes*') ? 'active' : '' }}">
    <a href="{{ route('votes.index') }}"><i class="fa fa-edit"></i><span>Обратная связь</span></a>
</li>

