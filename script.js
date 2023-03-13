const items = document.querySelectorAll('.item');
if (items.length > 0) {

    items.forEach((item) => {

        item.onclick = function () {
            item.classList.toggle('active');
            const activeItems = document.querySelectorAll('.item.active');
            const steps = document.querySelector('#steps');
            if (activeItems.length < 2) {
                steps.innerHTML = '';
            }
            if (activeItems.length === 2) {
                getSteps(activeItems);
            }
            if (activeItems.length > 2) {
                items.forEach((item) => {
                    steps.innerHTML = '';
                    item.classList.remove('active');
                })
            }
        }
    });
}

function getSteps(items) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', './back/getSteps.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    const steps = document.querySelector('#steps');
    xhr.onload = function () {
        if (this.status === 200) {
            steps.innerHTML = 'The distance is:' + this.responseText;
        }
    }
    xhr.send(JSON.stringify({
        start: items[0].dataset.number,
        end: items[1].dataset.number,
    }));
}