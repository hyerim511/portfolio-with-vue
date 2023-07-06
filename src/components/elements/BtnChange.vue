<template>
    <button class="btn">
        <svg viewBox="0 0 100 100" width="100" height="100">
            <defs>
                <path id="circle"
                    d="
                    M 50, 50
                    m -37, 0
                    a 37,37 0 1,1 74,0
                    a 37,37 0 1,1 -74,0"/>
            </defs>
            <text>
                <textPath xlink:href="#circle">
                    Oh, You don't like this Font?
                </textPath>
            </text>
        </svg>
    </button>
</template>

<script>
export default {
    name: "BtnChange"
}
</script>