<div class="task">
    <div class="title">
        <input type="checkbox"
            @if ($data && $data['done'])
                checked
            @endif
        />
        <span class="task_title">{{ $data['title'] ?? '' }}</span>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <span>{{ $data['category'] ?? '' }}</span>
    </div>
    <div class="actions">
        <a href="/edit/{{ $data['id'] ?? '' }}">
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="/delete/{{ $data['id'] ?? '' }}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>
