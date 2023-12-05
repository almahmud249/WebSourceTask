<template>
    <header>
        <nav>
            <!-- <button  class="btn btn-sm  btn-primary ">B</button> -->
            <i id="openSidebar" style="cursor: pointer;" class="fa-solid  d-md-none me-auto ms-5 fa-arrow-right "></i>
            <div class="d-flex align-items-center gap-3">
                <img
                    src="https://backend.bppshop.com.bd/assets/front-end/img/flags/en.png"
                    alt />
                <div id="custom_dropdown">
                    <p id="selected_item" class="mb-0"></p>
                    <div id="dropdown_item">
                        <p class="drop_item active">English</p>
                    </div>
                </div>
            </div>
            <div><i class="fa-solid fa-globe"></i></div>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
