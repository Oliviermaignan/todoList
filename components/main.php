<?php
require_once __DIR__ . "/../src/repositories/TaskRepository.php";
$NewtaskRepo = new TaskRepository();
$tasks = $NewtaskRepo->getAll();
?>

<main class="main d-flex">
<div class="container mt-5 w-25 p-3">
        <form>
            <div class="mb-3">
                <label for="taskInput" class="form-label">Tâche</label>
                <input type="text" class="form-control" id="taskInput">
            </div>
            <div class="mb-3">
                <label for="descriptionInput" class="form-label">Description</label>
                <input type="text" class="form-control" id="descriptionInput">
            </div>
            <div class="mb-3">
                <label for="dateInput" class="form-label">Date</label>
                <input type="date" class="form-control" id="dateInput">
            </div>
            <div class="mb-3">
                <label for="prioritySelect" class="form-label"
                >Priorité</label><img src="./iconsSVG/tooltipsIcons.svg" data-bs-toggle="tooltip" data-bs-title="Changez la couleur de vos tâches selon leur priorités ;)" class="ms-2 mb-2"alt="">
                <select class="form-select" id="prioritySelect">
                    <option value="normal" class="bg-success-subtle">Normal</option>
                    <option value="important" class="bg-warning-subtle">Important</option>
                    <option value="urgent" class="bg-danger-subtle">Urgent</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="addTaskBtn">Ajouter</button>
        </form>
</div>
<div class="container mt-5 w-50 p-3 d-flex align-items-center justify-content-center">
    <div class="list-group list-group-flush">

<?php
foreach ($tasks as $task) {
    // HTML structure for displaying tasks
?>
    <div class="d-flex justify-content-center align-items-center border shadow rounded p-1 m-2 bg-warning-subtle">
        <div class="w-auto h-50 p-1" id="task1"><?= $task->getTitle(); ?></div>
        <div class="btn-group p-2">
            <button class="btn btn-outline-secondary btn-sm w-25">
                <input class="form-check-input" type="checkbox" id="doneCheck" name="doneCheck">
            </button>
            <button class="btn btn-outline-secondary btn-sm w-25">
                <img src="../iconsSVG/pencilIcon.svg" alt="" class="w-auto">
            </button>
            <button class="btn btn-outline-secondary btn-sm w-25">
                <img src="../iconsSVG/trashIcon.svg" alt="" class="w-auto">
            </button>
        </div>  
    </div>
    <?php
}
?>


        <div class=" d-flex justify-content-center align-items-center border shadow rounded p-1 m-2 bg-danger-subtle">
            <div class="w-auto h-50 p-1" id="task1">Faire la vaiselleeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</div>
            <div class="btn-group p-2">
                <button class="btn btn-outline-secondary btn-sm w-25">
                    <input class="form-check-input" type="checkbox" id="doneCheck" name="doneCheck">
                </button>
                <button class="btn btn-outline-secondary btn-sm w-25">
                    <img src="../iconsSVG/pencilIcon.svg" alt="" class="w-auto">
                </button>
                <button class="btn btn-outline-secondary btn-sm w-25">
                <img src="../iconsSVG/trashIcon.svg" alt="" class="w-auto">
                </button>
            </div>  
        </div>


    </div>
</div>
</main>




