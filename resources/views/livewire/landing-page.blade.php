<div>
    @inject('imageService', 'App\Services\ImageService')
    <!-- Button to Open Modal -->
    <div class="flex justify-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> Custom Image
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
            wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Image</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form p-4 bg-light rounded shadow-sm" wire:submit.prevent="create"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name:</label>
                            <input wire:model='name' type="text" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="image" class="form-label fw-bold">Image:</label>
                            <input wire:model="image" type="file" id="image"
                                accept="image/png, image/jpeg, image/jpg"
                                class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-50">
                            @error('image')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-upload"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($landings->count() > 0)
                    @foreach ($landings as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                @if ($data->image)
                                    <img src="{{ $imageService->imagePublisher($data->image) }}" alt="Image"
                                        width="50" height="50">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="text-center">No Data.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
