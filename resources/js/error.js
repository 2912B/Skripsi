document.addEventListener("DOMContentLoaded", function () {
    // Check for errors from the server
    if (window.errorMessage) {
        Swal.fire({
            icon: "error",
            title: window.errorTitle || "Error",
            text: window.errorMessage,
            confirmButtonText: "OK",
        });
    }

    if (window.errorMessages) {
        Swal.fire({
            icon: "error",
            title: window.errorTitle || "Error",
            html: window.errorMessages,
            confirmButtonText: "OK",
        });
    }

    // Check for success messages
    if (window.successMessage) {
        Swal.fire({
            icon: "success",
            title: window.successTiel || "Success",
            text: window.successMessage,
            confirmButtonText: "OK",
        });
    }
});
