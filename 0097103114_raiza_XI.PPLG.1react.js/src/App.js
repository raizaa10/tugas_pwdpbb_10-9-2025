import React, { useState } from "react";
import { Button, Card, Form } from "react-bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';

function App() {
  const [todos, setTodos] = useState([
    { text: "Ini adalah contoh todo", isDone: false }
  ]);

  const addTodo = text => {
    if (!text) return;
    const newTodos = [...todos, { text, isDone: false }];
    setTodos(newTodos);
  };

  const markTodo = index => {
    const newTodos = [...todos];
    newTodos[index].isDone = true;
    setTodos(newTodos);
  };

  const removeTodo = index => {
    const newTodos = [...todos];
    newTodos.splice(index, 1);
    setTodos(newTodos);
  };

  return (
    <div className="app container mt-4">
      <h1 className="text-center mb-4">Todo List</h1>
      <FormTodo addTodo={addTodo} />
      <div>
        {todos.map((todo, index) => (
          <Card className="mb-2" key={index}>
            <Card.Body>
              <Todo
                index={index}
                todo={todo}
                markTodo={markTodo}
                removeTodo={removeTodo}
              />
            </Card.Body>
          </Card>
        ))}
      </div>
    </div>
  );
}

// Komponen menampilkan tiap tugas
function Todo({ todo, index, markTodo, removeTodo }) {
  return (
    <div className="d-flex justify-content-between align-items-center">
      <span style={{ textDecoration: todo.isDone ? "line-through" : "" }}>
        {todo.text}
      </span>
      <div>
        <Button
          variant="outline-success"
          onClick={() => markTodo(index)}
          className="me-2"
        >
          ✓
        </Button>
        <Button
          variant="outline-danger"
          onClick={() => removeTodo(index)}
        >
          ✕
        </Button>
      </div>
    </div>
  );
}

// Form untuk menambahkan tugas baru
function FormTodo({ addTodo }) {
  const [value, setValue] = useState("");

  const handleSubmit = e => {
    e.preventDefault();
    addTodo(value);
    setValue("");
  };

  return (
    <Form onSubmit={handleSubmit} className="mb-3">
      <Form.Group>
        <Form.Label><b>Add Todo</b></Form.Label>
        <Form.Control
          type="text"
          value={value}
          onChange={e => setValue(e.target.value)}
          placeholder="Add new todo"
        />
      </Form.Group>
      <Button type="submit" variant="primary" className="mt-2">
        Submit
      </Button>
    </Form>
  );
}

export default App;
