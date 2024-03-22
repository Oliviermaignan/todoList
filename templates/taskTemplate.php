<?php
function generateTaskTemplate($priorityId, $taskTitle, $taskId) {
    $priorityClass = ($priorityId === 0) ? 'bg-success-subtle' : (($priorityId === 1) ? 'bg-warning-subtle' : 'bg-danger-subtle');

    $html = "<div class='d-flex justify-content-center align-items-center border shadow rounded p-1 m-2 " . $priorityClass . "'>
        <div class='w-auto h-50 p-1' id='task1'>" . $taskTitle . "</div>
        <div class='btn-group p-2'>
            <button class='btn btn-outline-secondary btn-sm w-25'>
                <input class='form-check-input' type='checkbox' id='doneCheck' name='doneCheck'>
            </button>
            <button class='btn btn-outline-secondary btn-sm w-25'>
                <img src='../iconsSVG/pencilIcon.svg' alt='' class='w-auto'>
            </button>
            <button class='btn btn-outline-secondary btn-sm w-25 deleteBtn' id='" . $taskId . "'>
                <img src='../iconsSVG/trashIcon.svg' alt='' class='w-auto'>
            </button>
        </div>
    </div>";
    
    return $html;
}

?>


