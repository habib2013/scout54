<div class="favorite-list-item">
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
        style="background-image: url('{{ asset($user->playerprofile->profileimage()) }}');">
    </div>
    <p>{{ strlen($user->name) > 5 ? substr($user->username,0,6).'..' : $user->username }}</p>
</div>
