let comment = document.querySelectorAll('.comment');

let show_comment = document.getElementById('show_comment');
let hide_comment = document.getElementById('hide_comment');
// let comment_num = (comment.length);
// console.log(comment_num);
for (let com of comment) {
    com.style.display = 'none'
}



function hide_comment_block(event) {
    event.preventDefault();
    let postId = event.target.paret;


    for (let com of comment) {
        com.style.display = 'none'
    }
}

function show_comment_block(event) {
    event.preventDefault();
    for (let com of comment) {
        com.style.display = 'block'
    }
}
let show = show_comment.addEventListener('click', show_comment_block);
let hide = hide_comment.addEventListener('click', hide_comment_block);