let comment = document.querySelectorAll('.comment');
let show_comment = document.getElementById('show_comment');
let comment_num = (comment.length);
console.log(comment_num);
for (let com of comment) {
    com.style.display = 'none'
}

function show_comment_block(event) {
    event.preventDefault();
    for (let com of comment) {
        com.style.display = 'block'
    }
}
let show = show_comment.addEventListener('click', show_comment_block)