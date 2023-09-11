from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from typing import List, Optional

# Create an instance of the FastAPI class
app = FastAPI()

# Define a data model for a task


class Task(BaseModel):
    title: str
    description: Optional[str] = None
    done: bool = False


# Initialize an empty list to store tasks
tasks = []

# Create a new task


@app.post("/tasks/", response_model=Task)
async def create_task(task: Task):
    tasks.append(task)
    return task

# Retrieve all tasks


@app.get("/tasks/", response_model=List[Task])
async def get_tasks():
    return tasks

# Retrieve a specific task by its index


@app.get("/tasks/{task_index}", response_model=Task)
async def get_task(task_index: int):
    if task_index < 0 or task_index >= len(tasks):
        raise HTTPException(status_code=404, detail="Task not found")
    return tasks[task_index]

# Update a task by its index


@app.put("/tasks/{task_index}", response_model=Task)
async def update_task(task_index: int, updated_task: Task):
    if task_index < 0 or task_index >= len(tasks):
        raise HTTPException(status_code=404, detail="Task not found")

    tasks[task_index] = updated_task
    return updated_task

# Delete a task by its index


@app.delete("/tasks/{task_index}", response_model=Task)
async def delete_task(task_index: int):
    if task_index < 0 or task_index >= len(tasks):
        raise HTTPException(status_code=404, detail="Task not found")

    deleted_task = tasks.pop(task_index)
    return deleted_task
