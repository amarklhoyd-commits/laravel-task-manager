<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        {{ isset($task) ? 'Edit Task' : 'Add Task' }}
        - TaskManager
    </title>


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

            min-height: 100vh;

            padding: 35px;
        }


        /* TOP */

        .topbar {
            margin-bottom: 25px;
        }


        .topbar h1 {
            font-size: 28px;

            margin-bottom: 6px;
        }


        .topbar p {
            color: #6b7280;
        }


        /* FORM */

        .form-container {
            max-width: 750px;

            background: white;

            border-radius: 16px;

            padding: 30px;

            box-shadow:
                0 4px 18px
                rgba(0, 0, 0, 0.06);
        }


        /* HEADER */

        .form-header {
            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 25px;

            padding-bottom: 20px;

            border-bottom:
                1px solid #e5e7eb;
        }


        .form-icon {
            width: 55px;

            height: 55px;

            background: #eef2ff;

            color: #4f46e5;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 25px;
        }


        .form-header h2 {
            font-size: 21px;

            margin-bottom: 4px;
        }


        .form-header p {
            color: #6b7280;

            font-size: 14px;
        }


        /* ERROR */

        .error {
            background: #fee2e2;

            border-left:
                4px solid #ef4444;

            color: #991b1b;

            padding: 15px;

            border-radius: 8px;

            margin-bottom: 20px;
        }


        .error strong {
            display: block;

            margin-bottom: 7px;
        }


        .error p {
            font-size: 14px;

            margin-top: 4px;
        }


        /* FORM GROUP */

        .form-group {
            margin-bottom: 20px;
        }


        .form-row {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 18px;
        }


        label {
            display: block;

            font-weight: bold;

            font-size: 14px;

            margin-bottom: 8px;
        }


        .required {
            color: #ef4444;
        }


        /* INPUT */

        input,
        textarea,
        select {
            width: 100%;

            padding: 13px 14px;

            border:
                1px solid #d1d5db;

            border-radius: 9px;

            font-size: 14px;

            font-family: Arial, sans-serif;

            outline: none;

            transition: 0.3s;

            background: white;
        }


        textarea {
            min-height: 130px;

            resize: vertical;
        }


        input:focus,
        textarea:focus,
        select:focus {

            border-color: #6366f1;

            box-shadow:
                0 0 0 3px #eef2ff;
        }


        .help-text {
            color: #9ca3af;

            font-size: 12px;

            margin-top: 6px;
        }


        /* BUTTONS */

        .buttons {
            display: flex;

            gap: 10px;

            margin-top: 28px;

            padding-top: 20px;

            border-top:
                1px solid #e5e7eb;
        }


        .btn {
            padding: 12px 20px;

            border: none;

            border-radius: 8px;

            font-size: 14px;

            font-weight: bold;

            cursor: pointer;

            text-decoration: none;

            transition: 0.3s;
        }


        .save-btn {
            background: #4f46e5;

            color: white;
        }


        .save-btn:hover {
            background: #4338ca;

            transform: translateY(-1px);
        }


        .cancel-btn {
            background: #e5e7eb;

            color: #374151;
        }


        .cancel-btn:hover {
            background: #d1d5db;
        }


        /* MOBILE */

        @media (max-width: 750px) {

            .sidebar {

                position: relative;

                width: 100%;

                height: auto;

                padding: 18px;
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
                margin-bottom: 0;
            }


            .main {

                margin-left: 0;

                padding: 20px;
            }


            .form-row {

                grid-template-columns: 1fr;

                gap: 0;
            }

        }


        @media (max-width: 500px) {

            .main {
                padding: 15px;
            }


            .form-container {
                padding: 20px;
            }


            .buttons {
                flex-direction: column;
            }


            .btn {
                width: 100%;

                text-align: center;
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
                href="{{ route('tasks.index') }}">

                🏠 Dashboard

            </a>


            <a
                href="{{ route('tasks.create') }}"
                class="active">

                ➕ Add Task

            </a>


        </div>


    </aside>



    <!-- MAIN -->

    <main class="main">


        <!-- PAGE HEADER -->

        <div class="topbar">


            @if(isset($task))

                <h1>
                    Edit Task
                </h1>

                <p>
                    Update the information of your task.
                </p>

            @else

                <h1>
                    Add New Task
                </h1>

                <p>
                    Create a new task and keep yourself organized.
                </p>

            @endif


        </div>



        <!-- FORM CONTAINER -->

        <div class="form-container">


            <!-- FORM HEADER -->

            <div class="form-header">


                <div class="form-icon">

                    {{ isset($task) ? '✏️' : '➕' }}

                </div>


                <div>


                    @if(isset($task))

                        <h2>
                            Update Task
                        </h2>

                        <p>
                            Change the details below.
                        </p>

                    @else

                        <h2>
                            Task Information
                        </h2>

                        <p>
                            Enter the details for your new task.
                        </p>

                    @endif


                </div>


            </div>



            <!-- ERRORS -->

            @if($errors->any())


                <div class="error">


                    <strong>
                        ⚠️ Please fix the following:
                    </strong>


                    @foreach($errors->all() as $error)

                        <p>
                            • {{ $error }}
                        </p>

                    @endforeach


                </div>


            @endif



            <!-- FORM -->

            <form
                id="taskForm"
                action="{{ isset($task)
                    ? route('tasks.update', $task->id)
                    : route('tasks.store') }}"
                method="POST">


                @csrf


                @if(isset($task))

                    @method('PUT')

                @endif



                <!-- TASK NAME -->

                <div class="form-group">


                    <label for="task_name">

                        Task Name

                        <span class="required">
                            *
                        </span>

                    </label>


                    <input
                        type="text"
                        id="task_name"
                        name="task_name"
                        value="{{ old(
                            'task_name',
                            $task->task_name ?? ''
                        ) }}"
                        placeholder="e.g. Complete Laravel project"
                        maxlength="255"
                        required>


                    <div class="help-text">

                        Give your task a short and clear name.

                    </div>


                </div>



                <!-- DESCRIPTION -->

                <div class="form-group">


                    <label for="description">

                        Description

                    </label>


                    <textarea
                        id="description"
                        name="description"
                        placeholder="Write a description for your task...">{{ old(
                            'description',
                            $task->description ?? ''
                        ) }}</textarea>


                    <div class="help-text">

                        Add additional information about the task.

                    </div>


                </div>



                <!-- STATUS + DATE -->

                <div class="form-row">


                    <!-- STATUS -->

                    <div class="form-group">


                        <label for="status">

                            Status

                            <span class="required">
                                *
                            </span>

                        </label>


                        <select
                            id="status"
                            name="status"
                            required>


                            <option
                                value="Pending"
                                {{ old(
                                    'status',
                                    $task->status ?? 'Pending'
                                ) == 'Pending'
                                    ? 'selected'
                                    : '' }}>

                                ⏳ Pending

                            </option>


                            <option
                                value="Completed"
                                {{ old(
                                    'status',
                                    $task->status ?? ''
                                ) == 'Completed'
                                    ? 'selected'
                                    : '' }}>

                                ✅ Completed

                            </option>


                        </select>


                    </div>



                    <!-- DUE DATE -->

                    <div class="form-group">


                        <label for="due_date">

                            Due Date

                        </label>


                        <input
                            type="date"
                            id="due_date"
                            name="due_date"
                            value="{{ old(
                                'due_date',
                                $task->due_date ?? ''
                            ) }}">


                    </div>


                </div>



                <!-- BUTTONS -->

                <div class="buttons">


                    <button
                        type="submit"
                        class="btn save-btn"
                        id="saveButton">


                        {{ isset($task)
                            ? '💾 Update Task'
                            : '💾 Save Task' }}


                    </button>


                    <a
                        href="{{ route('tasks.index') }}"
                        class="btn cancel-btn">

                        ← Cancel

                    </a>


                </div>


            </form>


        </div>


    </main>



    <!-- JAVASCRIPT -->

    <script>


        /*
        |--------------------------------------------------------------------------
        | Form
        |--------------------------------------------------------------------------
        */


        const form =
            document.getElementById(
                "taskForm"
            );


        const taskName =
            document.getElementById(
                "task_name"
            );


        const saveButton =
            document.getElementById(
                "saveButton"
            );



        /*
        |--------------------------------------------------------------------------
        | Validation
        |--------------------------------------------------------------------------
        */


        form.addEventListener(
            "submit",
            function (event) {


                const name =
                    taskName.value.trim();


                if (name === "") {


                    event.preventDefault();


                    alert(
                        "Please enter a task name."
                    );


                    taskName.focus();


                    return;

                }


                /*
                Prevent double clicking
                */


                saveButton.disabled = true;


                saveButton.style.opacity =
                    "0.7";


                saveButton.innerHTML =
                    "⏳ Saving...";


            }
        );



        /*
        |--------------------------------------------------------------------------
        | Due Date
        |--------------------------------------------------------------------------
        */


        const dueDate =
            document.getElementById(
                "due_date"
            );


        const today =
            new Date()
                .toISOString()
                .split("T")[0];


        dueDate.setAttribute(
            "min",
            today
        );



        /*
        |--------------------------------------------------------------------------
        | Task Name Character Limit
        |--------------------------------------------------------------------------
        */


        taskName.addEventListener(
            "input",
            function () {


                if (
                    this.value.length > 255
                ) {

                    this.value =
                        this.value.substring(
                            0,
                            255
                        );

                }

            }
        );

    </script>


</body>

</html>