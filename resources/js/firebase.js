// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getMessaging, getToken, onMessage } from "firebase/messaging";
import { now } from "lodash";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyAVqdi28rJjsheCGufoV7iYVpEU5133tok",
    authDomain: "connect-b1b48.firebaseapp.com",
    projectId: "connect-b1b48",
    storageBucket: "connect-b1b48.appspot.com",
    messagingSenderId: "392400723409",
    appId: "1:392400723409:web:350c30f469d7cac26714f0",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

const messaging = getMessaging();
getToken(messaging, {
    vapidKey:
        "BMKNz0Y-2aJMaeoieYZQaK-Ksi0rbHW5dDZ-Te1PRjTLtieVVjtPXYtD4RQWcdA17AJ_vUjFBzbsVIOm7Gvv9ik",
})
    .then((currentToken) => {
        if (currentToken) {
            // Send the token to your server and update the UI if necessary
            // ...
            console.log(currentToken);
            var data = {
                fcm_token: currentToken,
                _token: token,
            };
            $.post(
                routeStoreToken,
                data,
                function (data, textStatus, jqXHR) {},
                "json"
            );
        } else {
            // Show permission request UI
            console.log(
                "No registration token available. Request permission to generate one."
            );
            // ...
        }
    })
    .catch((err) => {
        console.log("An error occurred while retrieving token. ", err);
        // ...
    });

onMessage(messaging, (payload) => {
    console.log("Message received. ", payload);
    // ...
    var notification = `<div class="notification-list unseen-notification">
    <p class="fw-bold"> ${payload.notification.title}</p>
    <p>${payload.notification.body}</p>
    <p class="text-secondary">${moment(now()).fromNow()}</p>
    </div>`;
    $(".notification-badge").show();
    $(".notification-dropdown").prepend(notification);
});

$("#notificationDropdown").on("hidden.bs.dropdown", function () {
    if ($(".unseen-notification").length > 0) {
        $.ajax({
            type: "post",
            url: routeNotificationRead,
            data: {
                _token: token,
            },
            dataType: "json",
            success: function (response) {
                $(".notification-badge").hide();
                $(".notification-dropdown").hasClass("show");
                $(".notification-list").removeClass("unseen-notification");
                $(".notification-list p").removeClass("fw-bold");
            },
        });
    }
});
