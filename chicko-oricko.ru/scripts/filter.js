const list = document.querySelector('.list');
const items = document.querySelectorAll('.block__item');
const listItems = document.querySelectorAll('.list__item');

function filter(){
    list.addEventListener('click', event => {
        const targetId = event.target.dataset.id;
        const target = event.target;
        // console.log(targetId);
        
        if (target.classList.contains('list__item')) {
            listItems.forEach(listItem => listItem.classList.remove('active'));
            target.classList.add('active')
        }

        switch(targetId) {

        case 'one':
            getItems(targetId);
            break;

        case 'two':
            getItems(targetId);
            break;

        case 'three':
            getItems(targetId);
            break;

        case 'four':
            getItems(targetId);
            break;

        case 'five':
            getItems(targetId);
            break;

    }
    });
}

filter();

function getItems(className) {
    items.forEach(item => {
        if(item.classList.contains(className)) {
            item.style.display = 'block';
        }
        else item.style.display = 'none';
    })
}