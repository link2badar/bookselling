<template>
    <h2 class="m-0 text-dark mb-4">Groups</h2>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <!-- buttons to add -->
                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#add_group_modal" @click="addGroupBtn">
                    <i class="fas fa-plus"></i> Add New Group
                </button>
            </h3>
        </div>


        <!-- modal to add new group -->
        <div class="modal fade" id="add_group_modal" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Group</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="errors" v-if="errors != ''">
                            <p v-for="error in errors" :key="errorkey" class="text-sm text-danger">
                                {{ error }}
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="group_title">Group Title</label>
                            <input type="email" class="form-control" v-model="formdata.group_title" id="group_title" placeholder="Enter group title">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button v-if="group_id == ''" type="button" class="btn btn-primary" @click="addNewGroup">Save changes</button>
                        <button v-else type="button" class="btn btn-primary" @click="updateGroup">Update changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>



        <!-- /.card-header -->
        <div class="card-body">
            <table id="group-data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Group Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <template v-for="group in groups" :key="group.id">
                        <tr>
                            <td>{{ group.id }}</td>
                            <td>{{ group.group_title }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" @click="editGroupData(group)" data-toggle="modal" data-target="#add_group_modal"><i class="fas fa-edit"></i></button> |
                                <button type="button" class="btn btn-danger btn-xs" @click="deleteGroupData(group.id)"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</template>

<!-- vue js script for crud -->
<script>
    import {ref, onMounted, reactive} from 'vue';
    import axios from 'axios';

    export default{
        setup(){

             // variable to store data
            const groups = ref([]);
            const errors = ref([]);

            //variable to check whether update or add
            const group_id      =   ref([]);
            // function to get from db
            const getGroups     =   async() => {
                let res         =   await axios.get('api/groups');
                groups.value    =   res.data;
            }

            // onload show data
            onMounted(getGroups());




            //function to add data in db
            const addGroupBtn   =   async() => {
                formReset();
            }
            const formdata      =   reactive({
                group_title     :   ''
            });

            const formReset     =   ()  => {
                group_id.value          =   '';
                formdata.group_title    =   '';
            };
            const addNewGroup   =   async() => {
                try{
                    // submit data into db
                    await axios.post('api/group/add', formdata)
                    .then(function (response) {
                            if(response.status == 200)
                                toastr.success(response.data);
                            else
                                toastr.error("Something went wrong");
                        })
                    ;
                    //get latest data from db after submission
                    getGroups();
                    //hide modal with reset modal form
                    $("body").removeClass('modal-open');
                    $(".modal-backdrop").remove();
                    $("#add_group_modal").removeClass('show');
                    formReset();
                } catch(e) {
                    if(e.response.status == 422){
                        var errorData   =   [];
                        for(const errorKey in e.response.data.errors){
                            errorData.push(e.response.data.errors[errorKey][0]);
                        }
                        errors.value  =   errorData;
                    }
                }
            }



            //function to update data in db
            const editGroupData = (group)   =>  {
                group_id.value              =   group.id;
                formdata.group_title        =   group.group_title;
            }

            const updateGroup   =       async() => {
                try{
                    // submit data into db
                    await axios.patch('api/group/update/'+group_id.value, formdata)
                        .then(function (response) {
                            if(response.status == 200)
                                toastr.success(response.data);
                            else
                                toastr.error("Something went wrong");
                        })
                    ;
                    //get latest data from db after submission
                    getGroups();
                    //hide modal with reset modal form
                    $("body").removeClass('modal-open');
                    $(".modal-backdrop").remove();
                    $("#add_group_modal").removeClass('show');
                    formReset();
                } catch(e) {
                    if(e.response.status == 422){
                        var errorData   =   [];
                        for(const errorKey in e.response.data.errors){
                            errorData.push(e.response.data.errors[errorKey][0]);
                        }
                        errors.value  =   errorData;
                    }
                }
            }


            //function to delete data in db
            const deleteGroupData   =   async(id) =>  {
                await axios.get('api/group/delete/'+id)
                    .then(function (response) {
                        if(response.status == 200)
                            toastr.error(response.data);
                        else
                            toastr.info("Something went wrong");
                    })
                ;
                getGroups();
            }

            // return to use in templates
            return{
                groups,
                formdata,
                group_id,
                addNewGroup,
                formReset,
                errors,
                editGroupData,
                addGroupBtn,
                updateGroup,
                deleteGroupData
            }
        }

    }

</script>
