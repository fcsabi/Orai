public class App {
    public static void bubiRendez(int[]uj_szamok){
        for(int i=uj_szamok.length; i>0;i--){
            for(int j=0;j<1;j++){
                if(uj_szamok[j]>uj_szamok[j+1]){
                    int swap=uj_szamok[j];
                    uj_szamok[j]=uj_szamok[j+1];
                    uj_szamok[j+1]=swap;
                }
            }
        }
        return uj_szamok;

    }
    public static void kiirSzamok(int []szamok){
        for (int i : szamok) {
            System.out.print(i+"");

        }
        System.out.println();
    }
    public static void main(String[] args) throws Exception {
        System.out.println("Buborék rendezés");
        int[] szamok={213,4553,21,012,1,421342,3};
        bubiRendez(szamok);
    }
}
