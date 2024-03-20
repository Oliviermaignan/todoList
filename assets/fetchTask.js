// recuperation du boutton
if (document.querySelector('#addTaskBtn')) {
    let btnTask = document.querySelector('#addTaskBtn');

    btnTask.addEventListener('click', (e) => {
        e.preventDefault();
        appelFetchTask();
    });
}

function appelFetchTask(){
    let taskInput = document.querySelector('#taskInput').value;
    let descriptionInput = document.querySelector('#descriptionInput').value;
    let dateInput = document.querySelector('#dateInput').value;
    let prioritySelect = document.querySelector('#prioritySelect').value;

    let dataObj = {
        "task": taskInput,
        "description": descriptionInput,
        "deadline": dateInput,
        "priority": prioritySelect
    };
    let JSONdata = JSON.stringify(dataObj);

    fetch('./../src/treatment/taskTreatment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSONdata
    })
    .then(response => response.json())
    .then(responseData => {
        if (responseData) {
            // let data = JSON.parse(responseData);
            console.log(responseData);
        } else {
            console.log(responseData);
        }
    })
    .catch(error => {
        console.error('Erreur lors de la requête fetch:', error);
    });
}