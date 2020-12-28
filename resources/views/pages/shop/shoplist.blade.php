@extends('layouts.master')

<!DOCTYPE html>
<html>





<div class="card mt-7">
                    <div class="card-body">
                        <h4 class="header-title">Shop List & Details</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>ID</td>
                                        <td>Shop Name</td>
                                        <td>Phone Number</td>
                                        <td>Email</td>
                                        <td>Category</td>
                                        <td>Location</td>
                                        <td>Created At</td>
                                        <td>Updated At</td>
                                        <td>Action</td>
                                    </tr>
                                    
                                    
                                    @foreach ($shops as $shop)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $shop->name }}</td>
                            
                            <td>{{ $shop->phoneno }}</td>
                            <td>{{ $shop->email }}</td>
                            <td>{{ $shop->category}}</td>
                            <td>{{ $shop->location}}</td>
                            <td>{{ $shop->created_at}}</td>
                            <td>{{ $shop->updated_at}}</td>
                            <td>
                                <a href="{{ route('shop.edit', $shop->id) }}" class="btn btn-outline-success">Edit</a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteShopModal{{ $shop->id }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                                </tbody>
                            </table>
                            <div>
                           <li><a href="{{route('superadmin.index')}}" class="btn btn-outline-success">Back</a></li>
                            </div>
                        </div>
                        <!--<div class="pagination_area pull-right mt-10">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="{{route('superadmin.index')}}">Back</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>-->

                        

                      <!--  <script>
                        function search(){
                            const value = $("#search").val();
                            $.ajax({
                                url : '/search',
                                type : 'POST',
                                data: {
                                    value : value,

                                },
                                success:function(data) {
                                    $('#shopsTable').html(data);
                                }
                            })
                        }-->

                        @foreach ($shops as $shop)
            <div class="modal fade" id="deleteShopModal{{ $shop->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Are you sure to delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ route('shop.delete', $shop->id) }}" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger ml-2">
                                Confirm, Delete
                            </button>
                            <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

                    </div>
                </div>

               
                
        </html>  