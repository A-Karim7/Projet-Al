package webService;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import metier.Articles;

public class ServiceRest {
		private Connection con=null;
		private PreparedStatement statement=null;
		private ResultSet result=null;
		//methode pour  (xml ou json ) au choix 
		
		
		//recuperer listes des articles
		
		public ArrayList <Articles> listerArticles()
		{
			 ArrayList<Articles> liste= new ArrayList<Articles>();
		     try
		     {
		       statement=con.prepareStatement("select * from article");
		       result=statement.executeQuery();
		       while(result.next())
		         {
		         Articles a = new Articles();
		           a.setTitre(result.getString("titre"));
		           a.setContenu(result.getString("texte"));
		           a.setCategorie(result.getString("categorie"));
		           a.setDatePublication(result.getDate("date"));

		           liste.add(a); 
		         }  
		     }
		     catch(Exception e)
		     {
		        System.out.println(e.getMessage());
		     }
		    return liste;

		}
		
		//liste des articles regroup�es en cat�gories
		
		
		
		//listes des articles appartenant � une categorie fournie par l'utilisateur
		public ArrayList <Articles> listerArticlesParCat(int cat)
		{
			 ArrayList<Articles> liste= new ArrayList<Articles>();
		     try
		     {
		       statement=con.prepareStatement("select * from article, categorie where categorie = ?");
		       statement.setInt(1, cat);
		       
		       result=statement.executeQuery();
		       while(result.next())
		         {
		         Articles a = new Articles();
		           a.setTitre(result.getString("titre"));
		           a.setContenu(result.getString("texte"));
		           a.setCategorie(result.getString("categorie"));
		           a.setDatePublication(result.getDate("date"));

		           liste.add(a); 
		         }  
		     }
		     catch(Exception e)
		     {
		        System.out.println(e.getMessage());
		     }
		    return liste;

		}

}
