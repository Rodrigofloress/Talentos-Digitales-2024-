import e from "express";
import { pool } from "./database.js";

/* ----------------------------------------------Libros------------------------------------------------ */

class LibroController{

    async getAll(req, res) {
        try{
        const [result] = await pool.query("SELECT * FROM libros");
        res.json(result);
        }catch(error){
            res.status(500).json({error:error.message});
        }
    }

   
    async add(req, res){
        try{
        const libro = req.body;
        const [result] = await pool.query("INSERT INTO Libros (nombre, autor, categoria, añoPublicacion, ISBN) VALUES (?, ?, ?, ?, ?)", [libro.nombre, libro.autor, libro.categoria, libro.añoPublicacion, libro.ISBN]);
        res.json({"id Insertado": result.insertId});
        }catch(error){
            res.status(500).json({error:error.message});
        }
    }

   
    async delete(req, res){
        try{
        const {ISBN} = req.body;
        const [result] = await pool.query("DELETE FROM Libros WHERE ISBN=?", [ISBN,]);
        if(result.affectedRows === 0){
            res.status(404).json({message:"Libro NO encontrado"});
        }else{
        res.json({"Registros eliminados": result.affectedRows});
        }}catch(error){
            res.status(500).json({error:error.message});
        }
    }

    async update(req, res){
        try{
        const libro = req.body;
        const [result] = await pool.query("UPDATE Libros SET nombre=?, autor=?, categoria=?, añoPublicacion=?, ISBN=? WHERE id=?", [libro.nombre, libro.autor, libro.categoria, libro.añoPublicacion, libro.ISBN, libro.id]);
        if(result.changedRows === 0){
            res.status(404).json({message:"Libro NO encontrado"});
        }else{
        res.json({"Registros actualizados": result.changedRows});
        }}catch(error){
            res.status(500).json({error:error.message});
        }
    }

    async getById(req, res) {
        try{
        const { id } = req.params;
        const [result] = await pool.query("SELECT * FROM Libros WHERE id = ?", [
          id,
        ]);
        if(result.length === 0){
            res.status(404).json({message:"Libro NO encontrado"});
        }else{
           res.json(result[0]);
        }}catch(error){
            res.status(500).json({error:error.message});
        }
    }

}

export const libro = new LibroController();


/* ------------------------------------TP4 añadido a "Personas" de videos subidos------------------------------------------------ */

class PersonaController{

    async getAll(req, res) {    
        try{    
        const [result] = await pool.query("SELECT * FROM personas");
        res.json(result);
        }catch(error) {
            res.status(500).json({error:error.message});
        }
    }

    async add(req, res){
        try{
        const persona = req.body;
        const [result] = await pool.query(`INSERT INTO Personas (nombre, apellido, dni) VALUES (?, ?, ?)`, [persona.nombre, persona.apellido, persona.dni
        ]);

        res.json({"id Insertado": result.insertId});
        }catch(error){
        res.status(500).json({error:error.message});
        }
    }


    async delete(req, res){
        try{
        const {id} = req.body;
        const [result] = await pool.query("DELETE FROM Personas WHERE id=?", [id,]);
        
        if (result.affectedRows === 0){
            res.status(400).json({message:"Persona Encontrada con éxito"});
        }else{
            res.json({"Registros eliminados": result.affectedRows});
        }}catch(error){
            res.status(500).json({error:error.message});
        }
    }

    async update(req, res){
        try{
        const persona = req.body;
        const [result] = await pool.query("UPDATE Personas SET nombre=?, apellido=?, dni=? WHERE id=?", [persona.nombre, persona.apellido, persona.dni, persona.id]);
        
        if(result.changedRows === 0){
            res.status(400).json({message:"Persona NO encontrada"});
        }else{
            res.json({"Registros actualizados correctamente": result.changedRows});
        }}catch(error){
            res.status(500).json({error:error.message});
        }
    }
    

    async getById(req, res) {
        try{
        const { id } = req.params;
        const [result] = await pool.query("SELECT * FROM Personas WHERE id = ?", [
          id,
        ]);
        if(result.length === 0){
            res.status(400).json({message:"Persona NO encontrada"});
        }else{
            res.json(result[0]);
        }}catch(error){
            res.status(500).json({error:error.message});
        }
    }

}

export const persona = new PersonaController();
