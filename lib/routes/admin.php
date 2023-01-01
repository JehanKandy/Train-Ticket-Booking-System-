@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Kdam+Thmor+Pro&family=Roboto+Flex:opsz@8..144&family=Rubik&family=Teko:wght@300&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.app {
    display: flex;
    min-height: 100vh;
}

.menu-toggle {
    display: none;
    position: fixed;
    top: 2rem;
    right: 2rem;
    width: 60px;
    height: 60px;
    border-radius: 99px;
    background-color: #464646;
    cursor: pointer;
}

.hamburger {
    position: relative;
    top: calc(50% - 2px);
    left: 50%;
    transform: translate(-50%, -50%);
    width: 32px;
}

.hamburger>span,
.hamburger>span::before,
.hamburger>span::after {
    display: block;
    position: absolute;
    width: 100%;
    height: 4px;
    border-radius: 99px;
    background-color: #FFF;
    transition-duration: .25s;
}

.hamburger>span::before {
    content: '';
    top: -8px;
}

.hamburger>span::after {
    content: '';
    top: 8px;
}

.menu-toggle.is-active .hamburger>span {
    transform: rotate(45deg);
}

.menu-toggle.is-active .hamburger>span::before {
    top: 0;
    transform: rotate(0deg);
}

.menu-toggle.is-active .hamburger>span::after {
    top: 0;
    transform: rotate(90deg);
}

.sidebar {
    flex: 1 1 0;
    max-width: 300px;
    padding: 2rem 1rem;
    background-color: #e2e2e2;
    border-top: 1px solid white;
}

.sidebar h3 {
    color: #707793;
    font-size: 0.75rem;
    text-transform: uppercase;
    margin-bottom: 0.5em;
}

.sidebar .menu {
    margin: 0 -1rem;
}

.sidebar .menu .menu-item {
    display: block;
    padding-left: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
    color: rgb(0, 0, 0);
    text-decoration: none;
    transition: 0.2s linear;
    font-size: 20px;
}

.sidebar .menu i {
    margin-right: 15px;
}

.sidebar .menu .menu-item:hover {
    background-color: rgba(190, 190, 190, 0.815);
    color: black;

}

.sidebar .profile-img {
    width: 100px;
    height: 100px;
    border-radius: 100px;
    margin-left: 80px;
    margin-bottom: 20px;
    border: 3px solid white;
    align-items: center;
}

.sidebar .profile-name {
    color: white;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    margin-left: -15%;
}

.admin-content {
    z-index: -1;
}

.content {
    flex: 1 1 0;
    padding: 2rem;
}

.content h1 {
    color: #3C3F58;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.content p {
    color: #707793;
}

.admin-content {
    margin-top: 15px
}

.admin-content .grid {
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d" "e f g h";
}

.admin-item1 {
    background-color: #e2e2e2;
    height: 100px;
    transition: 0.5s;
    font-family: 'Kdam Thmor Pro', sans-serif;
}
.admin-item1:hover{
    background-color: #c2c2c2;
}
.std-hr {
    border-top: 1px solid rgb(29, 152, 235);
}

.admin-item2 {
    background-color: #e2e2e2;
    height: 100px;
    transition: 0.5s;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.tea-hr {
    border-top: 1px solid #50be50;
}

.admin-item3 {
    background-color: #e2e2e2;
    height: 100px;
    transition: 0.5s;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.admin-hr {
    border-top: 1px solid #f09712;
}

.admin-item4 {
    background-color: #e2e2e2;
    height: 100px;
    transition: 0.5s;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.qui-hr {
    border-top: 1px solid #50be50;
}

.admin-title {
    margin-top: -40px;
    padding-left: 40px;
    margin-left: 70px;
    font-size: 20px;
}


.last-user {
    width: 100%;
}

.last-user thead {
    background-color: black;
    color: white;
    height: 40px;
}

.last-title {
    padding-bottom: 5px;
    font-size: 25px;
}

.lastuser-tbl {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
}

.lastuser-tbl tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

.lastuser-tbl thead {
    background-color: rgb(29, 152, 235);
    color: white;
}

.lastuser-tbl thead tr {
    background-color: rgb(0, 128, 202);
    color: white;
    text-align: left;
    font-weight: bold;
    height: 40px;
}

.lastuser-tbl th,
td {
    padding: 12px 15px;
}

.lastuser-tbl tbody tr {
    border-bottom: 1px solid #dddddd;
}

.admin-comment .title {
    font-size: 30px;
}

.admin-comment-grid {
    display: grid;
    margin-top: 25px;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(100%, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c";
}

.comment1,
.comment2,
.comment3 {
    width: 100%;
    height: 100%;
    background: none;
    padding-top: 15px;
    padding-bottom: 25px;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 5px;
}

.comment1 {
    border: 1px solid rgb(29, 152, 235);
}

.comment2 {
    border: 1px solid #50be50;
}

.comment3 {
    border: 1px solid #f09712;
}

.usern {
    font-size: 20px;
    font-weight: bold;
}

.user-roll {
    font-size: 13px;
}

.commet-body {
    padding-top: 10px;
}

.admin-msg {
    padding-top: 40px;
    padding-bottom: 40px;
}

.admin-msg .title {
    font-size: 30px;
}

.msg-grid {
    display: grid;
    margin-top: 25px;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(100%, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c";
}

.msg-item1,
.msg-item2,
.msg-item3 {
    width: 100%;
    height: 100%;
    background: none;
    padding-top: 15px;
    padding-bottom: 25px;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 5px;
}

.msg-item1 {
    border: 1px solid red;
}

.msg-item2 {
    border: 1px solid red;
}

.msg-item3 {
    border: 1px solid red;
}

.msg-user {
    font-size: 20px;
    font-weight: bold;
}

.msg-roll {
    font-size: 13px;
}

.msg-body {
    padding-top: 10px;
}

.student-tbl {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    overflow: auto;
    white-space: nowrap;
    border-collapse: collapse;
}

.tbl-scorll {
    overflow-x: auto;
}

.student-tbl thead {
    background-color: #f09712;
    color: white;
}

.student-tbl thead tr {
    background-color: #f09712;
    color: white;
    text-align: left;
    font-weight: bold;
    height: 50px;
}

.student-tbl tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

.student-tbl th,
td {
    padding: 12px 15px;
}

.student-tbl tbody tr {
    border-bottom: 1px solid #dddddd;
    height: 55px;
}

.active {
    background-color: #50be50;
    color: white;
    padding: 5px;
    border-radius: 5px;
}

.deactive {
    background-color: red;
    color: white;
    padding: 5px;
    border-radius: 5px;
}

.pending-tea {
    background-color: rgb(29, 152, 235);
    color: white;
    padding: 5px;
    border-radius: 5px;
}

.infor-btn {
    width: 50%;
    border: 1px solid rgb(29, 152, 235);
    height: 30px;
    border-radius: 5px;
    background: none;
    color: rgb(29, 152, 235);
    transition: 0.5s;
}

.infor-btn:hover {
    background-color: rgb(29, 152, 235);
    color: white;
    cursor: pointer;
}

.profile-img-data {
    width: 200px;
    height: 200px;
    border-radius: 15px;
    margin-bottom: 15px;
}

.teacher_data {
    width: 500px;
}

.proflie_update {
    width: 100%;
    height: 35px;
    border-radius: 5px;
    border: 1px solid rgb(214, 214, 214);
}

.address_user {
    width: 100%;
    height: 100px;
    resize: none;
    border: 1px solid rgb(214, 214, 214);
}

.pass-reset-btn {
    width: 100%;
    height: 40px;
    border: 1px solid red;
    border-radius: 5px;
    background: none;
    transition: 0.5s;
    color: red;
}

.pass-reset-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.account-update-btn {
    width: 100%;
    height: 40px;
    border: 1px solid blue;
    border-radius: 5px;
    background: none;
    transition: 0.5s;
    color: blue;
}

.account-update-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.update-user-data {
    padding: 30px;
}

::-webkit-file-upload-button {
    border: none;
    padding: 5px;
    background-color: rgb(0, 110, 255);
    border-radius: 5px;
    color: white;
    cursor: pointer;
}

.update-user-data-btn {
    width: 100%;
    height: 40px;
    border: 1px solid red;
    color: red;
    background: none;
    border-radius: 5px;
    transition: 0.5s;
}

.update-user-data-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.update-acc-back-btn {
    width: 100%;
    height: 40px;
    border-radius: 5px;
    border: 1px solid blue;
    color: blue;
    background: none;
    transition: 0.5s;
}

.update-acc-back-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.pimg-update-btn {
    width: 50%;
    height: 40px;
    border: 1px solid blue;
    color: blue;
    border-radius: 5px;
    background: none;
    transition: 0.5s;
}

.pimg-update-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.profile-img-update {
    padding-top: 15px;
    padding-left: 20px;
}

.profileimg-update-btn {
    margin-top: 15px;
    width: 25%;
    height: 40px;
    border: 1px solid red;
    color: red;
    border-radius: 5px;
    transition: 0.5s;
    background: none;
}

.profileimg-update-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.back-btn {
    margin-top: 15px;
    width: 25%;
    height: 40px;
    background: none;
    border: 1px solid blue;
    color: blue;
    border-radius: 5px;
    transition: 0.5s;
}

.back-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.pass-reset-content {
    padding-top: 35px;
    margin-bottom: 35px;
}

.pass-email-btn {
    margin-top: 20px;
    width: 40%;
    height: 40px;
    background: none;
    border: 1px solid red;
    color: red;
    transition: 0.5s;
    border-radius: 5px;
}

.pass-email-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.student-panal {
    margin-top: 60px;
    margin-bottom: 60px;
}

.student-panal .top-title {
    font-size: 45px;
    margin-bottom: 15px;
}

.student-grid {
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c" "d e f";
}

.student-item1,
.student-item2,
.student-item3,
.student-item4,
.student-item5,
.student-item6 {
    height: 200px;
    border: none;
    border-radius: 5px;
    background: none;
    font-size: 25px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    transition: 0.5s;
}

.student-item1 {
    grid-area: a;
    border: 1px solid #50be50;
    color: #50be50;
}

.student-item2 {
    grid-area: b;
    border: 1px solid #f09712;
    color: #f09712;
}

.student-item3 {
    grid-area: c;
    border: 1px solid rgb(29, 152, 235);
    color: rgb(29, 152, 235);
}

.student-item4 {
    grid-area: d;
    border: 1px solid rgb(29, 152, 235);
    color: rgb(29, 152, 235);
}

.student-item5 {
    grid-area: e;
    border: 1px solid #50be50;
    color: #50be50;
}

.student-item6 {
    grid-area: f;
    border: 1px solid red;
    color: red;
}

.student-item1 .title,
.student-item2 .title,
.student-item3 .title,
.student-item4 .title,
.student-item5 .title,
.student-item6 .title {
    padding-top: 25px;
    padding-left: 15px;
}

.student-item1 .body,
.student-item2 .body,
.student-item3 .body,
.student-item4 .body,
.student-item5 .body,
.student-item6 .body {
    text-align: center;
    font-size: 30px;
    padding-top: 40px;
}

.student-item1:hover {
    color: white;
    background-color: #50be50;
    cursor: pointer;
}

.student-item2:hover {
    color: white;
    background-color: #f09712;
    cursor: pointer;
}

.student-item3:hover {
    color: white;
    background-color: rgb(29, 152, 235);
    cursor: pointer;
}

.student-item4:hover {
    color: white;
    background-color: rgb(29, 152, 235);
    cursor: pointer;
}

.student-item5:hover {
    color: white;
    background-color: #50be50;
    cursor: pointer;
}

.student-item6:hover {
    color: white;
    background-color: red;
    cursor: pointer;
}

.my-data-std {
    margin-top: 15px;
    margin-bottom: 15px;
}

.my-data-std .std-title {
    font-size: 35px;
}

.std-body {
    margin-top: 10px;
    margin-bottom: 10px;
}

.std-body .std-data-grid {
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c" "a e e" "a d f" "g g g" "h h i";
}

.std-data1 {
    grid-area: a;
}

.std-data1 .profile-img-std {
    width: 280px;
    height: 280px;
    border-radius: 5px;
    margin-bottom: 15px;
}

.std-data2 {
    grid-area: b;
}

.std-data3 {
    grid-area: c;
}

.std-data4 {
    grid-area: d;
}

.std-data5 {
    grid-area: e;
}

.std-data6 {
    grid-area: f;
}

.std-data7 {
    grid-area: g;
}

.std-data8 {
    grid-area: h;
}

.std-data9 {
    grid-area: i;
}

.std-data-input {
    width: 100%;
    height: 40px;
}

.std-data-address {
    width: 100%;
    height: 100px;
    resize: none;
}

.std-update-btn {
    width: 100%;
    text-decoration: none;
    margin-top: 15px;
    height: 55px;
    border: 1px solid red;
    border-radius: 5px;
    font-size: 20px;
    color: red;
    transition: 0.5s;
    background: none;
}

.std-update-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.std-img-update-btn {
    width: 100%;
    text-decoration: none;
    margin-top: 15px;
    height: 55px;
    border: 1px solid blue;
    border-radius: 5px;
    font-size: 20px;
    color: blue;
    transition: 0.5s;
    background: none;
}

.std-img-update-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.std-msg-grid {
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(1, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a" "b" "c" "d";
}

.type-answer {
    grid-area: a;
    border-bottom: 1px solid blue;
}

.type-answer .type-answer-input {
    width: 100%;
    height: 100px;
    resize: none;
}

.type-answer .question-btn {
    width: 100%;
    margin-top: 25px;
    height: 45px;
    border: 1px solid red;
    color: red;
    background: none;
    border-radius: 5px;
    transition: 0.5s;
    font-size: 19px;
}

.type-answer .question-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.display-answer {
    grid-area: b;
    border-bottom: 1px solid blue;
}

.display-answer .type-answer-input {
    width: 100%;
    height: 100px;
    resize: none;
    margin-top: 15px;
}

.reply-form-title {
    grid-area: c;
    background-color: rgb(0, 110, 255);
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    padding-top: 12px;
    padding-left: 20px;
    color: white;
}

.reply-anwser {
    grid-area: d;
}

.reply-anwser .answer-input {
    width: 100%;
    height: 100px;
    resize: none;
    margin-top: 15px;
}

.all-td-question {
    margin-bottom: 15px;
}

.all-td-question .title {
    font-size: 30px;
}

.all-question-std-tbl {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
}

.all-question-std-tbl tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

.all-question-std-tbl thead {
    background-color: rgb(29, 152, 235);
    color: white;
}

.all-question-std-tbl thead tr {
    background-color: rgb(0, 128, 202);
    color: white;
    text-align: left;
    font-weight: bold;
    height: 40px;
}

.all-question-std-tbl th,
td {
    padding: 12px 15px;
}

.all-question-std-tbl tbody tr {
    border-bottom: 1px solid #dddddd;
}

.question-std-bck {
    margin-top: 25px;
}

.question-std-bck .question-std-bck-btn {
    width: 25%;
    height: 40px;
    border: 1px solid blue;
    background: none;
    color: blue;
    border-radius: 5px;
    transition: 0.5s;
}

.question-std-bck .question-std-bck-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.view-std-question {
    width: 100%;
    height: 30px;
    border: 1px solid blue;
    color: blue;
    background: none;
    border-radius: 5px;
    transition: 0.5s;
}

.view-std-question:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.panding-std-question {
    background-color: red;
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;
    border-radius: 5px;
}

.answered-std-question {
    background-color: green;
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;
    border-radius: 5px;
}

.view-question {
    margin-top: 30px;
    margin-bottom: 30px;
}

.view-question .title {
    font-size: 30px;
    margin-bottom: 25px;
}

.view-question .question-view_input {
    width: 100%;
    height: 50px;
}

.std-question {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 1px solid rgb(194, 194, 194);
    padding-top: 45px;
    padding-bottom: 45px;
    padding-left: 50px;
    padding-right: 50px;
}

.view-question-input {
    width: 100%;
    height: 100px;
    resize: none;
    margin-top: 15px;
}

.answer-btn {
    width: 100%;
    height: 40px;
    margin-top: 20px;
    border: 1px solid red;
    background: none;
    border-radius: 5px;
    transition: 0.5s;
    color: red;
}

.answer-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.answer-bck-btn {
    width: 100%;
    height: 40px;
    margin-top: 20px;
    border: 1px solid blue;
    background: none;
    border-radius: 5px;
    transition: 0.5s;
    color: blue;
}

.answer-bck-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.comment-add {
    width: 50%;
    margin-top: 25px;
    height: 35px;
    border: 1px solid green;
    border-radius: 5px;
    color: green;
    background: none;
    transition: 0.5s;
}

.comment-add:hover {
    background-color: green;
    color: white;
    cursor: pointer;
}

.view-admin-question {
    margin-top: 15px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid green;
    height: 45px;
    color: green;
    background: none;
    transition: 0.5s;
}

.view-admin-question:hover {
    background-color: green;
    color: white;
    cursor: pointer;
}

.user-comment {
    margin-top: 50px;
    margin-bottom: 50px;
}

.user-comment .title {
    font-size: 40px;
    text-align: center;
}

.user-comment .body {
    padding-top: 50px;
}

.add-comment-grid {
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c" "d d d" "e e e";
}

.comment-item1 {
    grid-area: a;
}

.comment-item2 {
    grid-area: b;
}

.comment-item3 {
    grid-area: c;
}

.comment-item4 {
    grid-area: d;
}

.comment-item5 {
    grid-area: e;
}

.comment-input-title {
    font-size: 20px;
    padding-bottom: 15px;
}

.comment-input {
    width: 100%;
    height: 40px;
    padding-left: 5px;
}

.comment-textarea {
    width: 100%;
    height: 150px;
    resize: none;
}

.post-comment-btn {
    width: 100%;
    height: 50px;
    background: none;
    border: 1px solid red;
    border-radius: 2px;
    color: red;
    transition: 0.5s;
}

.post-comment-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.comment-bck-btn {
    margin-top: 15px;
    width: 100%;
    height: 50px;
    background: none;
    border: 1px solid rgb(25, 80, 231);
    border-radius: 2px;
    color: rgb(25, 80, 231);
    transition: 0.5s;
}

.comment-bck-btn:hover {
    background-color: rgb(25, 80, 231);
    color: white;
    cursor: pointer;
}

.add-comment-btn-user {
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid red;
    color: red;
    background: none;
    border-radius: 2px;
    transition: 0.5s;
}

.add-comment-btn-user:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.data-update-user {
    margin-top: 50px;
    margin-bottom: 50px;
}

.data-update-user .title {
    font-size: 45px;
    margin-bottom: 20px;
}
.logout-btn-nav{
    background-color: red;
    border: 1px solid red;
    padding: 5px 10px 5px 10px;
    background: none;
    color: red;
    border-radius: 2px;
    transition: 0.5s;
}
.logout-btn-nav:hover{
    background-color: red;
    color: white;
    cursor: pointer;
}

.contact-grid{
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d" "e f g h";
    margin-top: 40px;
}
.contact-grid .c-item1{
    height: 120px;
    background-color: #3b5998;
    color: white;
    text-align: center;
}
.contact-grid .c-item2{
    height: 120px;
    background-color: #3b5998;
    color: white;
    text-align: center;
}
.contact-grid .c-item3{
    height: 120px;
    background-color: #3b5998;
    color: white;
    text-align: center;
}
.contact-grid .c-item4{
    height: 120px;
    background-color: #3b5998;
    color: white;
    text-align: center;
}

@media only screen and (max-width: 1400px) {
    .menu-toggle {
        display: block;
    }
    .content {
        padding-top: 8rem;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100vh;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
    }
    .sidebar.is-active {
        left: 0;
    }
}

@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }
    .content {
        padding-top: 8rem;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100vh;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
    }
    .sidebar.is-active {
        left: 0;
    }
    .admin-content .grid {
        display: grid;
        min-width: 80%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d" "e f" "g h";
    }
    .admin-item1,
    .admin-item2,
    .admin-item3,
    .admin-item4,
    .admin-item5,
    .admin-item6,
    .admin-item7,
    .admin-item8 {
        width: 300px;
    }
    .admin-comment-grid {
        display: grid;
        margin-top: 25px;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(100px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .lastuser-tbl {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    }
    .all-question-std-tbl {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    }
    .msg-grid {
        display: grid;
        margin-top: 25px;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .student-tbl {
        min-width: 700px;
    }
    .student-tbl thead {
        display: none;
    }
    .student-tbl,
    .student-tbl tbody .student-tbl tbody tr,
    .student-tbl tbody td {
        display: block;
        width: 700px;
    }
    .all-question-std-tbl {
        min-width: 700px;
    }
    .all-question-std-tbl thead {
        display: none;
    }
    .all-question-std-tbl,
    .all-question-std-tbl tbody .all-question-std-tbl tbody tr,
    .all-question-std-tbl tbody td {
        display: block;
        width: 700px;
    }
    .all-question-std-tbl {
        min-width: 700px;
    }
    .all-question-std-tbl thead {
        display: none;
    }
    .all-question-std-tbl,
    .all-question-std-tbl tbody .all-question-std-tbl tbody tr,
    .all-question-std-tbl tbody td {
        display: block;
        width: 700px;
    }
    .student-grid {
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d" "e f";
    }
    .std-body .std-data-grid {
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b c" "a e e" "a d f" "g g g" "h h i";
    }
    .add-comment-grid {
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e";
    }
    .contact-grid{
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d" ;
        margin-top: 40px;
    }
}

@media screen and (max-width: 375px) {
    .menu-toggle {
        display: block;
    }
    .content {
        padding-top: 8rem;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100%;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
    }
    .sidebar.is-active {
        left: 0;
    }
    .admin-content .grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e" "f" "g" "h";
    }
    .admin-item1,
    .admin-item2,
    .admin-item3,
    .admin-item4,
    .admin-item5,
    .admin-item6,
    .admin-item7,
    .admin-item8 {
        width: 300px;
    }
    .admin-comment-grid {
        display: grid;
        margin-top: 25px;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(40px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .lastuser-tbl {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    }
    .all-question-std-tbl {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    }
    .lastuser-tbl th,
    td {
        padding: 6px 5px;
    }
    .all-question-std-tbl th,
    td {
        padding: 6px 5px;
    }
    .msg-grid {
        display: grid;
        margin-top: 25px;
        min-width: 50%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .student-tbl {
        min-width: 300px;
    }
    .student-tbl thead {
        display: none;
    }
    .student-tbl,
    .student-tbl tbody .student-tbl tbody tr,
    .student-tbl tbody td {
        display: block;
        width: 300px;
    }
    .all-question-std-tbl {
        min-width: 300px;
    }
    .all-question-std-tbl thead {
        display: none;
    }
    .all-question-std-tbl,
    .all-question-std-tbl tbody .all-question-std-tbl tbody tr,
    .all-question-std-tbl tbody td {
        display: block;
        width: 300px;
    }
    .all-question-std-tbl,
    .all-question-std-tbl tbody .all-question-std-tbl tbody tr,
    .all-question-std-tbl tbody td {
        display: block;
        width: 300px;
    }
    .teacher_data {
        width: 300px;
    }
    .student-grid {
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e" "f";
    }
    .profile-img-data {
        width: 100%;
        height: auto;
        border-radius: 15px;
        margin-bottom: 15px;
    }
    .std-data1 .profile-img-std {
        width: 100%;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .std-body .std-data-grid {
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e" "f" "g" "h" "i";
    }
    .add-comment-grid {
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e";
    }
    .contact-grid{
        display: grid;
        min-width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d";
        margin-top: 40px;
    }
}
