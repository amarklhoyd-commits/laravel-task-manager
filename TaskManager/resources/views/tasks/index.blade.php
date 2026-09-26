<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>TaskManager Dashboard</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }


        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;

            width: 240px;
            height: 100vh;

            background: #111827;
            color: white;

            padding: 25px 18px;
        }


        .logo {
            font-size: 22px;
            font-weight: bold;

            margin-bottom: 40px;

            padding-left: 10px;
        }


        .logo span {
            color: #6366f1;
        }


        .menu-title {
            color: #9ca3af;

            font-size: 12px;

            text-transform: uppercase;

            margin: 20px 10px 10px;
        }


        .menu a {
            display: block;

            padding: 13px 15px;

            margin-bottom: 7px;

            color: #d1d5db;

            text-decoration: none;

            border-radius: 8px;

            transition: 0.3s;
        }


        .menu a:hover,
        .menu .active {
            background: #4f46e5;
            color: white;
        }


        /* MAIN */

        .main {
            margin-left: 240px;

            padding: 30px;
        }


        /* TOP BAR */

        .topbar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 30px;
        }


        .welcome h1 {
            font-size: 28px;

            margin-bottom: 5px;
        }


        .welcome p {
            color: #6b7280;
        }


        .add-btn {
            background: #4f46e5;

            color: white;

            text-decoration: none;

            padding: 12px 20px;

            border-radius: 8px;

            font-weight: bold;

            transition: 0.3s;
        }


        .add-btn:hover {
            background: #4338ca;

            transform: translateY(-2px);
        }


        /* STATISTICS */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;

            margin-bottom: 30px;
        }


        .stat-card {
            background: white;

            padding: 22px;

            border-radius: 14px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, 0.06);

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .stat-info h2 {
            font-size: 28px;

            margin-bottom: 5px;
        }


        .stat-info p {
            color: #6b7280;

            font-size: 14px;
        }


        .stat-icon {
            width: 50px;
            height: 50px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 12px;

            font-size: 23px;

            background: #eef2ff;
        }


        /* TASK SECTION */

        .task-section {
            background: white;

            border-radius: 14px;

            padding: 25px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, 0.06);
        }


        .section-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 20px;
        }


        .section-header h2 {
            font-size: 20px;
        }


        /* SEARCH */

        .search-box {
            padding: 10px 14px;

            border: 1px solid #ddd;

            border-radius: 8px;

            outline: none;

            width: 220px;
        }


        .search-box:focus {
            border-color: #6366f1;
        }



        .task-card {
            border: 1px solid #e5e7eb;

            border-radius: 10px;

            padding: 18px;

            margin-bottom: 12px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            transition: 0.3s;
        }


        .task-card:hover {
            box-shadow:
                0 4px 12px
                rgba(0, 0, 0, 0.08);

            transform: translateY(-2px);
        }


        .task-details {
            flex: 1;
        }


        .task-details h3 {
            margin-bottom: 7px;

            font-size: 17px;
        }


        .task-details p {
            color: #6b7280;

            font-size: 14px;

            margin-bottom: 8px;
        }


        .due-date {
            font-size: 13px;

            color: #6b7280;
        }


        /* STATUS */

        .status {
            display: inline-block;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;
        }


        .pending {
            background: #fef3c7;

            color: #92400e;
        }


        .completed {
            background: #d1fae5;

            color: #065f46;
        }


        /* ACTIONS */

        .actions {
            display: flex;

            gap: 7px;

            margin-left: 20px;
        }


        .btn {
            border: none;

            padding: 8px 12px;

            border-radius: 7px;

            cursor: pointer;

            text-decoration: none;

            font-size: 13px;

            color: white;

            transition: 0.3s;
        }


        .edit-btn {
            background: #f59e0b;
        }


        .delete-btn {
            background: #ef4444;
        }


        .complete-btn {
            background: #10b981;
        }


        .pending-btn {
            background: #6b7280;
        }


        .btn:hover {
            opacity: 0.85;
        }


        /* SUCCESS */

        .success {
            background: #d1fae5;

            color: #065f46;

            padding: 13px 16px;

            border-radius: 8px;

            margin-bottom: 20px;
        }


        /* EMPTY */

        .empty {
            text-align: center;

            padding: 50px 20px;

            color: #6b7280;
        }


        .empty-icon {
            font-size: 50px;

            margin-bottom: 15px;
        }


        /* RESPONSIVE */

        @media (max-width: 900px) {

            .sidebar {
                width: 190px;
            }


            .main {
                margin-left: 190px;
            }


            .stats {
                grid-template-columns: 1fr;
            }


            .task-card {
                flex-direction: column;

                align-items: flex-start;
            }


            .actions {
                margin-left: 0;

                margin-top: 15px;
            }

        }


        @media (max-width: 650px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;
            }


            .logo {
                margin-bottom: 15px;
            }


            .menu-title {
                display: none;
            }


            .menu {
                display: flex;

                gap: 5px;
            }


            .menu a {
                margin: 0;
            }


            .main {
                margin-left: 0;

                padding: 15px;
            }


            .topbar {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }


            .search-box {
                width: 100%;
            }


            .section-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }


            .actions {
                flex-wrap: wrap;
            }

        }

    </style>

</head>


<body>


    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="logo">

            📋 Task<span>Manager</span>

        </div>


        <div class="menu-title">

            Menu

        </div>


        <div class="menu">

            <a
                href="{{ route('tasks.index') }}"
                class="active">

                🏠 Dashboard

            </a>


            <a
                href="{{ route('tasks.create', [], false) }}">
               
                ➕ Add Task

            </a>

        </div>

    </aside>



    <!-- MAIN -->

    <main class="main">


        <!-- TOP BAR -->

        <div class="topbar">

            <div class="welcome">

                <h1>Dashboard</h1>

                <p>
                    Manage your personal tasks easily.
                </p>

            </div>


            <a
                href="/tasks/create"
                class="add-btn">

                + Add New Task

            </a>

        </div>



        <!-- SUCCESS -->

        @if(session('success'))

            <div class="success">

                ✓ {{ session('success') }}

            </div>

        @endif



        <!-- STATISTICS -->

        @php

            $totalTasks =
                $tasks->count();

            $completedTasks =
                $tasks->where(
                    'status',
                    'Completed'
                )->count();

            $pendingTasks =
                $tasks->where(
                    'status',
                    'Pending'
                )->count();

        @endphp


        <div class="stats">


            <div class="stat-card">

                <div class="stat-info">

                    <h2>
                        {{ $totalTasks }}
                    </h2>

                    <p>
                        Total Tasks
                    </p>

                </div>


                <div class="stat-icon">
                    📋
                </div>

            </div>



            <div class="stat-card">

                <div class="stat-info">

                    <h2>
                        {{ $pendingTasks }}
                    </h2>

                    <p>
                        Pending Tasks
                    </p>

                </div>


                <div class="stat-icon">
                    ⏳
                </div>

            </div>



            <div class="stat-card">

                <div class="stat-info">

                    <h2>
                        {{ $completedTasks }}
                    </h2>

                    <p>
                        Completed Tasks
                    </p>

                </div>


                <div class="stat-icon">
                    ✅
                </div>

            </div>

        </div>



        <!-- TASK SECTION -->

        <section class="task-section">


            <div class="section-header">

                <h2>
                    My Tasks
                </h2>


                <input
                    type="text"
                    id="searchTask"
                    class="search-box"
                    placeholder="🔍 Search tasks...">

            </div>



            <div id="taskList">


                @forelse($tasks as $task)


                    <div
                        class="task-card"
                        data-task="{{ strtolower($task->task_name) }}">


                        <div class="task-details">


                            <h3>
                                {{ $task->task_name }}
                            </h3>


                            <p>

                                {{ $task->description
                                    ?? 'No description' }}

                            </p>


                            <div class="due-date">

                                📅

                                <strong>
                                    Due:
                                </strong>

                                {{ $task->due_date
                                    ?? 'No due date' }}

                            </div>


                            <br>


                            @if($task->status == 'Completed')

                                <span
                                    class="status completed">

                                    ✓ Completed

                                </span>

                            @else

                                <span
                                    class="status pending">

                                    ⏳ Pending

                                </span>

                            @endif


                        </div>



                        <!-- ACTIONS -->

                        <div class="actions">


                            <!-- EDIT -->

                            <a
                                href="{{ route(
                                    'tasks.edit',
                                    $task->id
                                ) }}"
                                class="btn edit-btn">

                                ✏️ Edit

                            </a>



                            <!-- DELETE -->

                            <form
                                action="{{ route(
                                    'tasks.destroy',
                                    $task->id
                                ) }}"
                                method="POST"
                                class="delete-form">

                                @csrf

                                @method('DELETE')


                                <button
                                    type="submit"
                                    class="btn delete-btn">

                                    🗑️ Delete

                                </button>

                            </form>



                            <!-- STATUS -->

                            <form
                                action="{{ route(
                                    'tasks.status',
                                    $task->id
                                ) }}"
                                method="POST">

                                @csrf

                                @method('PATCH')


                                @if($task->status == 'Pending')


                                    <input
                                        type="hidden"
                                        name="status"
                                        value="Completed">


                                    <button
                                        type="submit"
                                        class="btn complete-btn">

                                        ✓ Complete

                                    </button>


                                @else


                                    <input
                                        type="hidden"
                                        name="status"
                                        value="Pending">


                                    <button
                                        type="submit"
                                        class="btn pending-btn">

                                        ↩ Pending

                                    </button>


                                @endif

                            </form>


                        </div>


                    </div>


                @empty


                    <div class="empty">

                        <div class="empty-icon">
                            📋
                        </div>


                        <h3>
                            No Tasks Yet
                        </h3>


                        <p>
                            Start by adding your first task.
                        </p>

                    </div>


                @endforelse


            </div>


        </section>


    </main>



    <!-- JAVASCRIPT -->

    <script>


        /*
        |--------------------------------------------------------------------------
        | Search Tasks
        |--------------------------------------------------------------------------
        */


        const searchInput =
            document.getElementById(
                "searchTask"
            );


        const taskCards =
            document.querySelectorAll(
                ".task-card"
            );


        searchInput.addEventListener(
            "keyup",
            function () {

                const searchValue =
                    this.value.toLowerCase();


                taskCards.forEach(
                    function (task) {

                        const taskName =
                            task.getAttribute(
                                "data-task"
                            );


                        if (
                            taskName.includes(
                                searchValue
                            )
                        ) {

                            task.style.display =
                                "flex";

                        } else {

                            task.style.display =
                                "none";

                        }

                    }
                );

            }
        );



        /*
        |--------------------------------------------------------------------------
        | Delete Confirmation
        |--------------------------------------------------------------------------
        */


        const deleteForms =
            document.querySelectorAll(
                ".delete-form"
            );


        deleteForms.forEach(
            function (form) {

                form.addEventListener(
                    "submit",
                    function (event) {

                        const confirmDelete =
                            confirm(
                                "Are you sure you want to delete this task?"
                            );


                        if (!confirmDelete) {

                            event.preventDefault();

                        }

                    }
                );

            }
        );



        /*
        |--------------------------------------------------------------------------
        | Hide Success Message
        |--------------------------------------------------------------------------
        */


        const successMessage =
            document.querySelector(
                ".success"
            );


        if (successMessage) {

            setTimeout(
                function () {

                    successMessage.style.display =
                        "none";

                },
                3000
            );

        }

    </script>


</body>

</html>