<script setup>
import { reactive, onMounted, ref, provide, inject, defineProps } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import MainDashboard from "@/Components/MainDashboardComponent/index.vue";
import templates_coponent from "@/Components/MainDashboardComponent/Templates/index.vue";
import demo_component from "@/Components/MainDashboardComponent/Selectdemo/index.vue";
import target_component from "@/Components/MainDashboardComponent/Target/index.vue";
import redirect_component from "@/Components/MainDashboardComponent/Redirect/index.vue";
import setupgrid_component from "@/Components/MainDashboardComponent/SetupGrid/index.vue";
import instructions_component from "@/Components/MainDashboardComponent/Instructions/index.vue";
import analysis_component from "@/Components/MainDashboardComponent/Analysis/index.vue";
import Sidebar2 from "@/Components/Sidebar2.vue";

const props = defineProps(["data", "test_result", "rt_values", "mainData"]);

const sidebarVisible = ref(false);
const activeElem = ref(false);
// const mainCell = ref(props.data.images.MainTrial.message.cells);
// const resultCellId = ref(props.test_result);

// const mergeObjects = (obj1, obj2) => {
//     for (const [key1, value1] of Object.entries(obj1)) {
//         for (const [key2, value2] of Object.entries(obj2)) {
//             if (value1.cellid === value2.cellid) {
//                 obj1[key1].totat_rt = value2.total_rt;
//             }
//         }
//     }

//     return obj1;
// };

provide("Image_Settings", props.data.images);
// provide("Warning_Settings", props.data.warnings);
// provide("Header_Settings", props.data.headers);
// provide("Footer_Settings", props.data.footers);
provide("Instructions", props.data.instructions);
provide("DemoId", props.data.id);
provide("Alldata", props.data);
</script>

<template>
    <AppLayout>
        <div>
            <MainDashboard
                @show:menu="
                    (active) => {
                        if (!active) {
                            sidebarVisible = false;
                        } else {
                            sidebarVisible = true;
                        }
                        activeElem = active;
                    }
                "
            />

            <Transition name="sidebar">
                <Sidebar2 v-show="sidebarVisible">
                    <demo_component v-if="activeElem === 'demo'">
                    </demo_component>
                    <templates_coponent
                        v-if="activeElem === 'templates'"
                    ></templates_coponent>

                    <target_component
                        v-if="activeElem === 'trial'"
                    ></target_component>
                    <redirect_component
                        v-if="activeElem === 'redirect'"
                    ></redirect_component>

                    <setupgrid_component
                        v-if="activeElem === 'setupgrid'"
                    ></setupgrid_component>

                    <instructions_component
                        v-if="activeElem === 'instructions'"
                    ></instructions_component>
                    <analysis_component v-if="activeElem === 'analysis'">
                    </analysis_component>
                </Sidebar2>
            </Transition>
        </div>
    </AppLayout>
</template>
