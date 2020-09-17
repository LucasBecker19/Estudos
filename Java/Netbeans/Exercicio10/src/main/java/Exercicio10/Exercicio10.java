/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
package Exercicio10;
import java.util.Scanner;

/**
*
* @author User
*/
public class Exercicio10
{
    public static void main(String[] args)
   {
        boolean infoValida=false, infoCodigo=false;
        int curso=0, homens, mulheres, vagas,  cmaiorcand=0, cmaiorcodigo=0,totalCandidatos=0;
        double[] codigo = new double [999],pmulheres = new double [999],VCand = new double [999];
        char resp;
       
        for (int i=0;!infoValida;i++)
        {
            Scanner entrada = new Scanner(System.in);
            curso++;
            System.out.print("\nCódigo do curso: ");
            codigo[i] = entrada.nextDouble();
            System.out.print("Quantidade de vagas: ");
            vagas = entrada.nextInt();
            System.out.print("Quantidade de candidatos homens: ");
            homens = entrada.nextInt();
            System.out.print("Quantidade de candidatos mulheres: ");
            mulheres = entrada.nextInt();

            totalCandidatos+=homens+mulheres;
            VCand[i]=(homens+mulheres)/vagas;
            pmulheres[i]=(mulheres*100)/(homens+mulheres);

            if (i==0)
            {
                cmaiorcand=(int)VCand[i];
                cmaiorcodigo=(int) codigo[i];
            }
            else 
            {
                  for (int c=0;c<i;c++)
                  {
                        if (VCand[i]>cmaiorcand)
                        {
                            cmaiorcand=(int) VCand[i];
                            cmaiorcodigo=(int) codigo[i];
                        }
                  }
            }
            do{
            System.out.print("Deseja adicionar outro curso?(s/n): ");
            resp = entrada.next().charAt(0);
            if (resp=='n' || resp=='N')
                        infoValida=true;
                    else if (resp=='s' || resp=='S')
                        infoValida=false;
                    else
                        System.out.println("Digite um carácter aceitável.");
            }while (resp!='n' && resp!='N' && resp!='s' && resp!='S');
        }
            
        //SAÍDA
        for  (int i=0;i<curso;i++)
        {
              System.out.println("\n\nCódigo do curso: .......................... " + codigo[i]);
              System.out.println("Porcentagem de mulheres: .................. " + pmulheres[i] + "%");
              System.out.println("Quantidade de candidatos por vaga: ........ " + VCand[i]);
              System.out.println("-----------------------------------------------------");
        }
        System.out.println("\nMaior número de candidatos por vaga: ...... " + cmaiorcand + " \nCurso: " +  cmaiorcodigo );
        System.out.println("Número total de candidatos: " + totalCandidatos);
   }
}