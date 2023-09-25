from fastapi import FastAPI

# Create an instance of the FastAPI class
app = FastAPI()

# Define a route for the root URL ("/") to return "Hello, World!"


@app.get("/")
async def read_root():
    return {"message": "Olá Mundo! Via FastAPI Python :)"}
