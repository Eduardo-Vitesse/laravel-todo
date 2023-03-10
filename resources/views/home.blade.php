@extends('layouts.main')
@section('title', 'Home')

@section('navigation')
        <a href="{{ route('task.create') }}" class="btn btn-primary">Criar tarefa</a>
@endsection

@section('content')
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                    13 Dezembro
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <span class="graph_header-subtitle">Tarefas: <b>3/6</b></span>

        <div class="graph-placeholder"></div>

        <div class="task_left-footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
        </div>

    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task_list">
            @php
                $tasks = [
                    ['id' => 1, 'done' => false, 'title' => 'Minha primeira tarefa', 'category' => 'Categoria 1'],
                    ['id' => 2, 'done' => true, 'title' => 'Minha segunda tarefa', 'category' => 'Categoria 2'],
                    ['id' => 3, 'done' => false, 'title' => 'Minha terceira tarefa', 'category' => 'Categoria 1'],
                ]
            @endphp
            <x-task :data=$tasks[0]/>
            <x-task :data=$tasks[1]/>
            <x-task :data=$tasks[2]/>
        </div>
    </section>
@endsection
