// https://just-validate.dev/documentation/
// just-validate.jsライブラリを使ったフロント側バリデーション
new window.JustValidate('#ajaxForm')
    .addField('#yoken-select', [
        {
            rule: 'required',
            errorMessage: '必須項目です',
        },
    ])
    .addField('#name', [
        {
            rule: 'required',
            errorMessage: '必須項目です',
        },
        {
            rule: 'maxLength',
            value: 30,
            errorMessage: '店舗名/会社名は30文字以下でご入力ください',
        },
    ])
    .addField('#email', [
        {
            rule: 'required',
            errorMessage: '必須項目です',
        },
        {
            rule: 'email',
            errorMessage: 'メールアドレスを正しい形式で入力してください',
        },
    ])
    .addField('#phone', [
        {
            rule: 'required',
            errorMessage: '必須項目です',
        },
        {
            rule: 'maxLength',
            value: 13,
            errorMessage: '電話番号は13文字以下でご入力ください',
        },
    ])
    .addField('#message', [
        {
            rule: 'required',
            errorMessage: '必須項目です',
        },
        {
            rule: 'maxLength',
            value: 300,
            errorMessage: 'お問い合わせ内容は300文字以下でご入力ください',
        },
    ])
    .onSuccess((event) => {
        sendMessages();
    });


function sendMessages() {
    /**
     * JustValidateのバリデーション成功時(onSuccess)に発火させる関数
     * 送信ボタンの連打防止して、フォームデータ集めて、AJAX送信。MAIL_FORM_URL+"?action=send_mail"の箇所が大事
     */
    const timeout = 4000;
    preventRepeatedHit (timeout);

    const formData = {
        category: document.querySelector('#yoken-select').value,
        name: document.querySelector('#name').value,
        email: document.querySelector('#email').value,
        phone: document.querySelector('#phone').value,
        title: document.querySelector('#title').value,
        message: document.querySelector('#message').value,
    };

    const xhr = new XMLHttpRequest();
    xhr.onloadstart = function() {
        console.log('データ送信中...');
    }
    xhr.onload = function() {
        console.log('サーバーから返事が来ました。');
        const response = xhr.responseText;
        if(response.includes('エラー') || response.includes('0')){
            console.log('サーバー側によるエラーが発生してしまったようです。');
            const timeout = 10000;
            autoDisaposalModal(response, timeout);
        } else {
            console.log('お問い合わせいただけたようでありがとうございます。');
            const timeout = 10000;
            autoDisaposalModal(response, timeout);
        }
    }
    xhr.onerror = function() {
        autoDisaposalModal('<p>通信エラーが発生しました<br>通信状況の良い場所で再度お試しください。</p>', timeout);
    }
    xhr.ontimeout = function () {
        autoDisaposalModal('<p>接続タイムアウトです。<br>サーバーからの応答がありません。</p>', timeout);
    }
    xhr.timeout = timeout;
    xhr.responseType = 'text';
    xhr.open("POST", MAIL_FORM_URL+"?action=send_mail", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(JSON.stringify(formData));
}


function preventRepeatedHit (timeout) {
    /**
     * ボタン連打防止機能。timeout秒無効化すると同時に色を半透明にする。
     */
    const submitButton = document.getElementById("submit");
    submitButton.disabled = true;
    submitButton.style.opacity = 0.5;
    setTimeout(function () {
        submitButton.disabled = false;
        submitButton.style.opacity = 1;
    }, timeout);
}


function autoDisaposalModal (message, timeout) {
    /**
     * 自動的に消えるポップアップ関数。モーダルを作って差し込み
     */
    const dialog = `<div id="modalWrap" style="{display: none; background: none; width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index: 100; overflow: hidden;}">
                        <div class="modal">
                            <div class="modal-content">
                                <span class="close-button">×</span>
                                <h1>${message}</h1>
                            </div>
                        </div>
                    <style>
                    .trigger{
                          text-align: center;
                        padding: 7px 13px;
                        background: #3e3e3e;
                        color: #fff;
                        font-size: 15px;
                        outline: none;
                        border: none;
                        border-radius: 5px;
                        font-family: cursive;
                    }
                    
                    .modal {
                        position: fixed;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        opacity: 0;
                        visibility: hidden;
                        transform: scale(1.1);
                        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
                    }
                    .modal-content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: white;
                        padding: 1rem 1.5rem;
                        width: 24rem;
                        border-radius: 0.5rem;
                    }
                    .close-button {
                        float: right;
                        width: 1.5rem;
                        line-height: 1.5rem;
                        text-align: center;
                        cursor: pointer;
                        border-radius: 0.25rem;
                        background-color: lightgray;
                    }
                    .close-button:hover {
                        background-color: darkgray;
                    }
                    .show-modal {
                        opacity: 1;
                        visibility: visible;
                        transform: scale(1.0);
                        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
                    }

                    </style>
                    </div>`
    const modalDialog = new DOMParser().parseFromString(dialog, "text/html").querySelector("html body").firstElementChild;
    document.querySelector('html body').appendChild(modalDialog);
    const modal = document.getElementById('modalBox');
    fadeIn(modal, 200);
    //メッセージの高さによってモーダルのサイズを調整。
    const messageHeight = document.getElementById("modalInner").clientHeight;
    modal.style.height = messageHeight + "px";
    //timeout秒に自動的に消滅する
    setTimeout(function () {
        fadeOut(modal, 200);
        setTimeout(function() {
            document.getElementById('modalWrap').remove();
        }, 200);
    }, timeout);
}


function fadeIn(node, duration) {
    /**
     * JQuery非依存のフェードイン関数
     */
    // display: noneでないときは何もしない
    if (getComputedStyle(node).display !== 'none') {
        return;
    }
    // style属性にdisplay: noneが設定されていたとき
    if (node.style.display === 'none') {
        node.style.display = '';
    } else {
        node.style.display = 'block';
    }
    node.style.opacity = 0;
    var start = performance.now();
    requestAnimationFrame(function tick(timestamp) {
        // イージング計算式（linear）
        var easing = (timestamp - start) / duration;
        // opacityが1を超えないように
        node.style.opacity = Math.min(easing, 1);
        // opacityが1より小さいとき
        if (easing < 1) {
            requestAnimationFrame(tick);
        } else {
            node.style.opacity = '';
        }
    });
}

function fadeOut(node, duration) {
    /**
     * JQuery非依存のフェードアウト関数
     */
    node.style.opacity = 1;
    var start = performance.now();
    requestAnimationFrame(function tick(timestamp) {
        // イージング計算式（linear）
        var easing = (timestamp - start) / duration;
        // opacityが0より小さくならないように
        node.style.opacity = Math.max(1 - easing, 0);
        // イージング計算式の値が1より小さいとき
        if (easing < 1) {
            requestAnimationFrame(tick);
        } else {
            node.style.opacity = '';
            node.style.display = 'none';
        }
    });
}
